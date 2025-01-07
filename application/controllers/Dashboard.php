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

}
