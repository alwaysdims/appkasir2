<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Produk extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('role') !== 'Admin' and $this->session->userdata('role') !== 'Petugas'){
			redirect('auth');
		}
		
    }
	public function index()
	{
		// show warna
		$this->db->from('warna');
        $this->db->order_by('warna','ASC');
        $warna= $this->db->get()->result_array();
       
		// show size
		$this->db->from('size');
        $this->db->order_by('size','ASC');
        $size = $this->db->get()->result_array();

		// show model
		$this->db->from('model');
        $this->db->order_by('model','ASC');
        $model= $this->db->get()->result_array();

		// show lengan
		$this->db->from('lengan');
        $this->db->order_by('lengan','ASC');
        $lengan = $this->db->get()->result_array();

		// show bahan
		$this->db->from('bahan');
        $this->db->order_by('bahan','ASC');
        $bahan = $this->db->get()->result_array();

		// show jenis
		$this->db->from('jenis');
        $this->db->order_by('jenis','ASC');
        $jenis = $this->db->get()->result_array();

		// show produk
		$this->db->from('produk a')->order_by('nama' , 'ASC');
		// join model
		$this->db->join('model b','a.id_model  = b.id_model');
		// join size
		$this->db->join('size c','a.id_size  = c.id_size');
		// join bahan
		$this->db->join('bahan d','a.id_bahan  = d.id_bahan');
		// join lengan
		$this->db->join('lengan e','a.id_lengan  = e.id_lengan');
		// join warna
		$this->db->join('warna f','a.id_warna  = f.id_warna');
		// join jenis
		$this->db->join('jenis g','a.id_jenis  = g.id_jenis');
		$produk = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Produk',
			'jenis' => $jenis,
			'bahan' => $bahan,
			'size' => $size,
			'model' => $model,
			'lengan' => $lengan,
			'warna' => $warna,
			'produk' => $produk
		);

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('produk',$data);
		$this->load->view('layout/footer.php');
	}

	public function simpan(){
		$this->db->from('produk');
        $this->db->where('nama',$this->input->post('nama'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Gagal ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
            redirect('produk');
            
        }
		$data = array(
            'nama'     => $this->input->post('nama'),
            'keterangan'     => $this->input->post('keterangan'),
            'stock'     => $this->input->post('stock'),
            'harga'     => $this->input->post('harga'),
            'harga_beli'     => $this->input->post('harga_beli'),
            'kode_barang'     => $this->input->post('kode_barang'),
            'id_bahan'     => $this->input->post('bahan'),
            'id_warna'     => $this->input->post('warna'),
            'id_model'     => $this->input->post('model'),
            'id_size'     => $this->input->post('size'),
            'id_jenis'     => $this->input->post('jenis'),
            'id_lengan'     => $this->input->post('lengan'),
        );
		$this->db->insert('produk',$data);
		$this->session->set_flashdata('notif', '
		<div class="alert alert-primary alert-dismissible show flex text-white items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Data berhasil Ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
	   ');
        redirect('produk');
	}

	public function update(){
		$getId = array('id_produk' => $this->input->post('id_produk'));
		
		// $this->db->select('a.stock')
		// 		->from('produk a')
		// 		->join('log_stock b', 'a.id_produk = b.id_produk')
		// 		->where('a.id_produk', $this->input->post('id_produk')); // Tambahkan kondisi WHERE

		$this->db->from('produk')->where('id_produk', $this->input->post('id_produk'));

		$stockSebelum = $this->db->get()->row();
		
		$dataLogStock = [
			'id_produk' => $this->input->post('id_produk'),
			'jumlah_sebelum' => $stockSebelum->stock,
			'jumlah_sesudah' => $this->input->post('stock'),
			'username' => $this->session->userdata('username'),
			'tanggal' => date('Y-m-d H:i:s'),
			'keterangan' => 'Stock diubah dari ' . $stockSebelum->stock . ' menjadi ' . $this->input->post('stock') . ' oleh ' . $this->session->userdata('username')	
		];
		$this->db->insert('log_stock',$dataLogStock);

		$data = array(
            'nama'     => $this->input->post('nama'),
            'keterangan'     => $this->input->post('keterangan'),
            'stock'     => $this->input->post('stock'),
            'harga'     => $this->input->post('harga'),
            'harga_beli'     => $this->input->post('harga_beli'),
            'kode_barang'     => $this->input->post('kode_barang'),
            'id_bahan'     => $this->input->post('bahan'),
            'id_warna'     => $this->input->post('warna'),
            'id_model'     => $this->input->post('model'),
            'id_size'     => $this->input->post('size'),
            'id_jenis'     => $this->input->post('jenis'),
            'id_lengan'     => $this->input->post('lengan'),
        );
		$this->db->update('produk', $data, $getId);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil diubah! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('produk');

	}

	public function logStock($id){
		$this->db->select('*')
		->from('produk a')
		->join('log_stock b','a.id_produk = b.id_produk')
		->order_by('tanggal','DESC')
		->where('a.id_produk',$id);
		$logStock = $this->db->get()->result_array();

		$data = [
			'judul' => ' Log Stock 	-',
			'logStock' => $logStock
		];

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('log_stock', $data);
		$this->load->view('layout/footer.php');
	}
	public function delete($id){
		$getId = array('id_produk' => $id);
		$this->db->delete('produk',$getId);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
		redirect('produk');
	}
}
