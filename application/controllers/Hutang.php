<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hutang extends CI_Controller {

	public function index()
	{
		$this->db->select('*')
         ->from('hutang a')
         ->join('detail_penjualan b', 'a.nota = b.nota')
         ->order_by('a.nota', 'DESC'); // Menyebutkan tabel asal kolom nota

		$dataHutang = $this->db->get()->result_array();

		$data = [
			'judul' => 'Hutang',
			'dataHutang' =>$dataHutang
		];
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('hutang', $data);
		$this->load->view('layout/footer.php');
	}

	public function pembayaran()
	{
		// Ambil data nota dan nominal bayar dari input
		$nota = $this->input->post('nota');
		$nominalBayar = $this->input->post('bayar');

		// Validasi input
		if (empty($nota) || empty($nominalBayar) || !is_numeric($nominalBayar)) {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger">Input tidak valid!</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}

		// Ambil data terkait hutang
		$this->db->select('*')->from('hutang a')
				->join('detail_hutang b', 'a.nota=b.nota')
				->join('penjualan c', 'a.nota=c.nota')
				->where('a.nota', $nota);
		$getData = $this->db->get()->row();

		// Pastikan data ditemukan
		if (!$getData || !isset($getData->bayar) || !isset($getData->tagihan) || !isset($getData->nominal)) {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger">Data tidak ditemukan!</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}

		// Hitung total pembayaran baru
		$bayarPenjualan = $getData->bayar + $nominalBayar;
		$bayarHutang = $getData->tagihan - $nominalBayar;
		$bayarDetail = $getData->nominal + $nominalBayar;

		// Validasi jika nominal yang dibayarkan melebihi tagihan
		if ($nominalBayar > $getData->tagihan) {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger">Nominal pembayaran melebihi tagihan!</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}

		// Update data berdasarkan kondisi pembayaran
		if ($nominalBayar == $getData->tagihan) {
			// Jika pembayaran lunas
			$dataPenjualan = [
				'bayar' => $bayarPenjualan,
				'status' => 'Selesai'
			];
			$this->db->update('penjualan', $dataPenjualan, ['nota' => $nota]);

			$dataHutang = [
				'tagihan' => 0,
				'status' => 'Selesai'
			];
			$this->db->update('hutang', $dataHutang, ['nota' => $nota]);

			$dataDetailHutang = [
				'nominal' => $bayarDetail,
			];
			$this->db->update('detail_hutang', $dataDetailHutang, ['nota' => $nota]);

			$dataLogCicilanHutang = [
				'nominal' => $nominalBayar,
				'tagihanHutang' => 0,
				'nota' => $nota,
				'tanggal' => date('Y-m-d'),
				'username' => $this->session->userdata('username'),
			];
			$this->db->insert('log_cicilanhutang',$dataLogCicilanHutang);

			$this->session->set_flashdata('notif', '<div class="alert alert-success">Pembayaran selesai!</div>');
			} else {
			// Jika pembayaran belum lunas
			$dataPenjualan = [
				'bayar' => $bayarPenjualan,
				'status' => 'Belum Lunas'
			];
			$this->db->update('penjualan', $dataPenjualan, ['nota' => $nota]);

			$dataHutang = [
				'tagihan' => $bayarHutang,
				'status' => 'Belum Lunas'
			];
			$this->db->update('hutang', $dataHutang, ['nota' => $nota]);

			$dataDetailHutang = [
				'nominal' => $bayarDetail,
			];
			$this->db->update('detail_hutang', $dataDetailHutang, ['nota' => $nota]);

			$dataLogCicilanHutang = [
				'nominal' => $nominalBayar,
				'tagihanHutang' => $bayarHutang,
				'nota' => $nota,
				'tanggal' => date('Y-m-d'),
				'username' => $this->session->userdata('username'),
			];
			$this->db->insert('log_cicilanhutang',$dataLogCicilanHutang);

			$this->session->set_flashdata('notif', '<div class="alert alert-warning">Pembayaran belum lunas!</div>');
			}

			// Redirect kembali
			redirect($_SERVER['HTTP_REFERER']);
	}

	public function log_hutang($id){

		$this->db->select('*')
				->from('log_cicilanhutang a')
				->join('hutang b','a.nota=b.nota')
				->order_by('a.tanggal','ASC')
				->where('a.nota',$id);
		$getLogCicilanHutang =$this->db->get()->result_array();

		$data = 
		[
			'judul' => 'Cicilan Hutang',
			'getLogCicilanHutang' =>$getLogCicilanHutang
		];

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('log_cicilanHutang', $data);
		$this->load->view('layout/footer.php');
	}

}
