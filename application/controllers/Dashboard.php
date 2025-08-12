<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('role') !== 'Admin' and $this->session->userdata('role') !== 'Petugas'){
			redirect('auth');
		}
		
    }
	public function index()
	{

		// Menghitung jumlah produk
		$this->db->from('produk');
		$totalProduk = $this->db->count_all_results();

		// Ambil data produk
		$this->db->from('produk')->order_by('stock','DESC')->limit(5);
		$dataProduk = $this->db->get()->result_array();

		// data penjualan
		$this->db->from('penjualan')
				->order_by('nota','DESC')->limit(5);
		$totalPenjualan = $this->db->get()->result_array();
		
		// total pengeluaran selama 1bulan
		$tanggalPengeluaranBulanan = date('Y-m');
		
		$this->db->select('nominal');
		$this->db->from('pengeluaran');
		$this->db->like('tanggal', $tanggalPengeluaranBulanan, 'after');
		$dataPengeluaranBulanan = $this->db->get()->result();
		
		$totalPengeluaranBulanan = 0;
		foreach ($dataPengeluaranBulanan as $pengeluaran) {
			$totalPengeluaranBulanan += $pengeluaran->nominal;
		}
		
		// data total pengeluaran selama satubulan	
		$this->db->from('pengeluaran')->order_by('tanggal','DESC')->limit(5);
		$getDataPengeluaran = $this->db->get()->result_array();

		// Mendapatkan tanggal hari ini
		$tanggalHari = date('Y-m-d');  // Format: YYYY-MM-DD

		 // Ambil data penjualan hari ini
		$this->db->select('total_harga');
		$this->db->from('penjualan');
		$this->db->where('tanggal', $tanggalHari);
		$query = $this->db->get();
	 
		 // Menghitung total harga penjualan harian
		$totalPenjualanHarian = 0;
		foreach ($query->result() as $penjualan) {
			$totalPenjualanHarian += $penjualan->total_harga;
		}

		// Mendapatkan bulan ini
		$tanggalBulan = date('Y-m'); // Format: YYYY-MM

		// Ambil data penjualan bulan ini
		$this->db->select('total_harga');
		$this->db->from('penjualan');
		$this->db->like('tanggal', $tanggalBulan, 'after'); // Filter berdasarkan bulan

		$query = $this->db->get();

		// Menghitung total harga penjualan bulanan
		$totalPenjualanBulanan = 0;
		foreach ($query->result() as $penjualan) {
			$totalPenjualanBulanan += $penjualan->total_harga;
		}
		
		$data = array(
			'judul' => 'Dashboard',
			'total' => $totalProduk,
			'dataProduk' => $dataProduk,
			'penjualan_hari_ini' => $totalPenjualanHarian,
			'penjualanBulanan' => $totalPenjualanBulanan,
			'dataPenjualan' =>$totalPenjualan,
			'totalPengeluaranBulanan' => $totalPengeluaranBulanan,
			'getDataPengeluaran' => $getDataPengeluaran,
 		);

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('beranda',$data);
		$this->load->view('layout/footer.php');
	}

	public function searchInvoice(){
		$nota = $this->input->post('nota');
		redirect('penjualan/invoice/'.$nota);
	}
	public function suara(){
		$nama = $this->input->post('nama_tps');
		$total_suara = $this->input->post('total_suara');
		$total_suara_sah = $this->input->post('total_suara_sah');
		$total_suara_tidak_sah = $this->input->post('total_suara_tidak_sah');
		$suara1 = $this->input->post('suara1');
		$suara2 = $this->input->post('suara2');
		$suara3 = $this->input->post('suara3');

		$pp = $this->db->select('*')->from('suara')->get()->row();

		$a = $suara1 + $suara2 + $suara3;
		$b = $total_suara_sah + $total_suara_tidak_sah;

		if($a != $total_suara){
			$this->session->set_flashdata('notif', 'Total Suara 1, Suara 2,Suara 3 Tidak Sama Dengan Total Suara!');
			redirect($_SERVER["HTTP_REFERER"]);
		}elseif($b != $total_suara){
			$this->session->set_flashdata('notif', 'Total Suara yang Sah dan yang Tidak Sah Tidak Sama dengan Total Suara!');
			redirect($_SERVER["HTTP_REFERER"]);	
		}elseif($a == $total_suara && $b == $total_suara ){

			$data =[
				'total_suara' => $total_suara,
				'total_suara_sah' => $total_suara_sah,
				'total_suara_tidak_sah' => $total_suara_tidak_sah,
				'nama_tps' => $nama,
				'suara1' => $suara1,
				'suara2' => $suara2,
				'suara3' => $suara3,
			];
	
			$this->db->insert('suara',$data);
			$this->session->set_flashdata('notif', 'Data BErhasil ditambahkan!');
			redirect($_SERVER["HTTP_REFERER"]);
		}
		elseif($pp->nama_tps == $nama){
			$this->session->set_flashdata('notif', 'TPS SUDAH DI INPUTKAN!');
			redirect($_SERVER["HTTP_REFERER"]);
		}

	}

}
