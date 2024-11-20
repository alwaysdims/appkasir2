<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

	public function index()
	{

		$this->db->from('pengeluaran')->order_by('tanggal','DESC');
		$pengeluaran = $this->db->get()->result_array();

		$data = [
			'pengeluaran' =>$pengeluaran
		];
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('pengeluaran', $data);
		$this->load->view('layout/footer.php');
	}

	public function addPengeluaran(){
		$data = [
			'nominal' => $this->input->post('nominal'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal' => $this->input->post('tanggal'),
			'username' => $this->session->userdata('username'),
		];
		$this->db->insert('pengeluaran',$data);
		$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
		redirect('pengeluaran');
	}
}
