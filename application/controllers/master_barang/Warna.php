<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warna extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('Warna_model');
          
    }

	public function index(){
        
        $this->db->from('warna');
        $this->db->order_by('warna','ASC');
        $warna = $this->db->get()->result_array();
       
		$data = [
			'judul' => 'Warna',
			'warna' =>$warna
		];
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('master_barang/warna_index.php',$data);
		$this->load->view('layout/footer.php');
	}
    public function simpan(){
        $this->db->from('warna');
        $this->db->where('warna',$this->input->post('nama_warna'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Gagal ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
            redirect('master_barang/warna');
            
        }
		$data = array(
            'warna'     => $this->input->post('nama_warna'),
        );
        $this->db->insert('warna',$data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/warna');
    }
    public function delete_data($id){
        $where = array('id_warna' => $id);
        $this->db->delete('warna', $where);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/warna');
    }
    public function update(){
        $get_id = array(
            'id_warna' => $this->input->post('id_warna'));

        $data = array(
            'warna' => $this->input->post('nama_warna'),
            
        );

        $this->db->update('warna',$data,$get_id);
        redirect('master_barang/warna');
    }

}
