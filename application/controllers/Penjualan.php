<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('role') !== 'Admin' and $this->session->userdata('role') !== 'Petugas'){
			redirect('auth');
		}
		
    }
	public function index()
	{
		$this->db->select('*')->from('penjualan')->order_by('tanggal','DESC');
		$getDataPenjualan = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Penjualan',
			'penjualan' => $getDataPenjualan,
		);
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('penjualan',$data);
		$this->load->view('layout/footer.php');
	}
	public function transaksi()
	{
		// membuat nota
		date_default_timezone_set("Asia/Jakarta");
		$tahun = date('Y');
		$bulan = date('m');
		$tanggal = date('d');
		$today = date('ymd');
		$this->db->where('DATE(tanggal)', $today);
		$jumlah = $this->db->count_all_results('penjualan')+1;
		$nota= $tahun.$bulan.$tanggal.$jumlah;

		// menampilkan produk
		$this->db->select('*')->from('produk')->where('stock >',0)->order_by('nama','ASC');
		$getProduk = $this->db->get()->result_array();
		// tampilan produk dari temp
		$this->db->select('*');
		$this->db->join('produk b','a.id_produk = b.id_produk');
		$this->db->from('temp a')->where('id_user',$this->session->userdata('id_user'));
		$app = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Transaksi #'.$nota,
			'nota' => $nota,
			'produk' => $getProduk,
			'tampil' =>$app
		);

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('transaksi',$data);
		$this->load->view('layout/footer.php');
	}


	public function addtemp() {
		// add id produk
		$kode_barang = $this->input->post('kode_barang');
		$namaProduk = $this->input->post('produk');
	
		$this->db->from('produk')->where('kode_barang', $kode_barang);
		$this->db->or_where('kode_barang', $namaProduk);
		$produk = $this->db->get()->row();
	
		if ($produk) {
			$this->db->from('temp');
			$this->db->where('id_produk', $produk->id_produk);
			$this->db->where('id_user', $this->session->userdata('id_user'));
			$cekTemp = $this->db->get()->row();
	
			if ($cekTemp != NULL) {
				// Tambahkan jumlah dengan 1 jika produk sudah ada di temp
				$id_produk = $produk->id_produk;
				$data = array(
					'jumlah' => $cekTemp->jumlah + 1 // Menambah jumlah dengan 1
				);
				$where = array(
					'id_produk' => $id_produk,
					'id_user' => $this->session->userdata('id_user'),
				);
				$this->db->update('temp', $data, $where);
	
				$this->session->set_flashdata('notif', '
				<div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert"> 
					<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Jumlah produk berhasil ditambahkan! 
					<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
						<i data-lucide="x" class="w-4 h-4"></i> 
					</button> 
				</div>');
			} else {
				// Jika produk belum ada di temp, tambahkan data baru
				$id_produk = $produk->id_produk;
				$data = array(
					'id_produk' => $id_produk,
					'jumlah' => 1,
					'id_user' => $this->session->userdata('id_user')
				);
	
				$this->db->insert('temp', $data);
				$this->session->set_flashdata('notif', '
				<div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert"> 
					<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Produk berhasil ditambahkan ke keranjang! 
					<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
						<i data-lucide="x" class="w-4 h-4"></i> 
					</button> 
				</div>');
			}
			redirect($_SERVER["HTTP_REFERER"]);
		} else {
			$this->session->set_flashdata('notif', '
			<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> 
				<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Produk tidak ditemukan! 
				<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
					<i data-lucide="x" class="w-4 h-4"></i> 
				</button> 
			</div>');
			
			redirect($_SERVER["HTTP_REFERER"]);
		}
	}

	public function delete($id){
		$id = array('id_temp'=>$id);
		$this->db->delete('temp',$id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
		redirect($_SERVER["HTTP_REFERER"]);

	}

	public function updateJumlahTemp() {
		// Ambil data produk berdasarkan kode_barang dari input
		$kode_barang = $this->input->post('kode_barang');
		$jumlahInput = $this->input->post('jumlah');
		$id_temp = $this->input->post('id_temp');
	
		// Dapatkan stok produk berdasarkan kode_barang
		$produk = $this->db->from('produk')->where('kode_barang', $kode_barang)->get()->row()->stock;
	
		// Pastikan produk ditemukan
		if (!$produk) {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> 
				<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Produk tidak ditemukan! 
				<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
					<i data-lucide="x" class="w-4 h-4"></i> 
				</button> 
			</div>');
			redirect($_SERVER["HTTP_REFERER"]);
		}
	
		// Periksa apakah jumlah input melebihi stok
		if($produk > $jumlahInput){
			// Update jumlah di tabel temp
			$data = array('jumlah' => $jumlahInput);
			$this->db->where('id_temp', $id_temp);
			$this->db->update('temp', $data);

			// Notifikasi sukses
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> 
				<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Jumlah Data Berhasil diubah! 
				<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
					<i data-lucide="x" class="w-4 h-4"></i> 
				</button> 
			</div>');
			redirect($_SERVER["HTTP_REFERER"]);
		} else{
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> 
				<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Jumlah data melebihi kapasitas stock! 
				<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
					<i data-lucide="x" class="w-4 h-4"></i> 
				</button> 
			</div>');
			redirect($_SERVER["HTTP_REFERER"]);
		}
	}

	public function prosesPembayaran() {
		// Membuat nota
		date_default_timezone_set("Asia/Jakarta");
		$tahun = date('Y');
		$bulan = date('m');
		$tanggal = date('d');
		$today = date('Y-m-d');
		$this->db->where('DATE(tanggal)', $today);
		$jumlah = $this->db->count_all_results('penjualan');
		$nota = $tahun . $bulan . $tanggal . str_pad($jumlah + 1, 3, '0', STR_PAD_LEFT);
	
		// Ambil input dari form
		$total_harga = $this->input->post('total_harga');
		$bayar = $this->input->post('uang_bayar');
		$kekurangan = $total_harga - $bayar;
	
		// Periksa apakah pembayaran kurang
		if ($kekurangan > 0) {
			// Simpan ke tabel detail_hutang
			$dataHutangDetail = array(
				'nota' => $nota,
				'tanggal' => date('Y-m-d'),
				'nominal' => $bayar,
				'username' => $this->session->userdata('username')
			);
			$this->db->insert('detail_hutang', $dataHutangDetail);
	
			// Simpan ke tabel hutang
			$dataHutang = array(
				'nota' => $nota,
				'tagihan' => $kekurangan,
				'status' => 'Belum Lunas'
			);
			$this->db->insert('hutang', $dataHutang);

			 // Update status di tabel penjualan menjadi "Hutang"
			 $this->db->from('penjualan');
			 $getNota = $this->db->get()->row();
			 $updatePenjualanStatus = array('status' => 'Hutang');
			 $wherePenjualan = array('nota' => $getNota->nota);
			 $this->db->update('penjualan', $updatePenjualanStatus, $wherePenjualan);
		}
	
		// Proses data dari tabel temp
		$this->db->from('temp a')
			->join('produk b', 'a.id_produk = b.id_produk')
			->where('id_user', $this->session->userdata('id_user'));
		$temp = $this->db->get()->result_array();
	
		foreach ($temp as $rowData) {
			// Periksa stok
			if ($rowData['stock'] < $rowData['jumlah']) {
				$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible">Stok tidak mencukupi!</div>');
				redirect($_SERVER["HTTP_REFERER"]);
			}
	
			// Simpan ke tabel detail_penjualan
			$data_detail_penjualan = array(
				'id_produk' => $rowData['id_produk'],
				'nota' => $nota,
				'harga_jual' => $rowData['harga'],
				'harga_beli' => $rowData['harga_beli'],
				'jumlah' => $rowData['jumlah']
			);
			$this->db->insert('detail_penjualan', $data_detail_penjualan);
	
			// Kurangi stok produk
			$this->db->update('produk', 
				['stock' => $rowData['stock'] - $rowData['jumlah']], 
				['id_produk' => $rowData['id_produk']]
			);
	
			// Simpan ke tabel log_stock
			$dataLogStock = array(
				'id_produk' => $rowData['id_produk'],
				'jumlah_sebelum' => $rowData['stock'],
				'jumlah_sesudah' => $rowData['stock'] - $rowData['jumlah'],
				'tanggal' => date('Y-m-d'),
				'username' => $this->session->userdata('username'),
				'keterangan' => 'Terjual ' . $rowData['jumlah'] . ' dengan nota #' . $nota
			);
			$this->db->insert('log_stock', $dataLogStock);
		}
	
		// Hapus data dari tabel temp
		$this->db->delete('temp', ['id_user' => $this->session->userdata('id_user')]);
	
		// Simpan ke tabel penjualan
		$dataPenjualan = array(
			'nota' => $nota,
			'total_harga' => $total_harga,
			'bayar' => $bayar,
			'tanggal' => date('Y-m-d'),
			'bukti_pembayaran' => $nota . '.jpg', // Sesuaikan jika bukti pembayaran diunggah
			'metode_pembayaran' => $this->input->post('metode_pembayaran'),
			'username' => $this->session->userdata('username'),
			'status' => ($kekurangan > 0) ? 'Belum Lunas' : 'Selesai'
		);
		$this->db->insert('penjualan', $dataPenjualan);
	
		// Redirect ke halaman invoice
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Transaksi berhasil!</div>');
		redirect('penjualan/invoice/' . $nota);
	}
	
	public function invoice($nota) {
		$this->db->select('*')->from('penjualan')->order_by('tanggal','DESC')->where('nota',$nota);
		$penjualan = $this->db->get()->row();

		$this->db->select('a.*,b.nama,b.kode_barang');
		$this->db->from('detail_penjualan a')
			->join('produk b','a.id_produk=b.id_produk')
			->where('nota',$nota);
		$detailPenjualan = $this->db->get()->result_array();

		$data = [
			'judul' => 'Invoice #'.$nota,
			'detailPenjualan' =>$detailPenjualan,
			'penjualan' => $penjualan,
			'nota' => $nota
		]; 

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('invoice', $data);
		$this->load->view('layout/footer.php');
	}
	
	public function ExporToExel(){

		$tanggal1 = $this->input->post('tgl1');
		$tanggal2 = $this->input->post('tgl2');
		$this->db->from('detail_penjualan a')
				->join('produk b','a.id_produk=b.id_produk')
				->join('penjualan c','a.nota=c.nota')
				->order_by('c.tanggal','DESC')
				->where('c.tanggal >=',$tanggal1)
				->where('c.tanggal <=',$tanggal2);
		$laporan =$this->db->get()->result_array();


		$data = [
			'laporan' => $laporan,
			'tanggal1' => $tanggal1,
			'tanggal2' => $tanggal2,
		]; 

		$this->load->view('layout/header.php',$data);
		$this->load->view('exporExcel.php', $data);
		$this->load->view('layout/footer.php');
	}

	public function printStruk($nota){
		$this->db->select('*')->from('penjualan')->order_by('tanggal','DESC')->where('nota',$nota);
		$penjualan = $this->db->get()->row();

		$this->db->select('a.*,b.nama,b.kode_barang');
		$this->db->from('detail_penjualan a')
			->join('produk b','a.id_produk=b.id_produk')
			->where('nota',$nota);
		$detailPenjualan = $this->db->get()->result_array();

		$profil = $this->db->from('konfigurasi')->get()->row();

		$data = [
			'judul' => 'Invoice #'.$nota,
			'profil' => $profil,
			'detailPenjualan' =>$detailPenjualan,
			'penjualan' => $penjualan,
			'nota' => $nota
		]; 

		$this->load->view('struk', $data);	
	}
	
	
}
