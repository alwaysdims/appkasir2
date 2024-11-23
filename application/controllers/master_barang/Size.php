<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('Size_model');
          
    }

	public function index(){
        
        $this->db->from('size');
        $this->db->order_by('size','ASC');
        $size = $this->db->get()->result_array();

		$data = [
			'judul' => 'Size',
			'size' =>$size
		];
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('master_barang/size_index.php',$data);
		$this->load->view('layout/footer.php');
	}
    public function simpan(){
        $this->db->from('size');
        $this->db->where('size',$this->input->post('nama_size'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Gagal ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
            redirect('master_barang/size');
            
        }
		$data = array(
            'size'     => $this->input->post('nama_size'),
        );
		$this->db->insert('size',$data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/size');
    }
    public function delete_data($id){
        $where = array('id_size' => $id);
        $this->db->delete('size', $where);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/size');
    }
    public function update(){
        $get_id = array(
            'id_size' => $this->input->post('id_size'));

        $data = array(
            'size' => $this->input->post('nama_size'),
            
        );

        $this->db->update('size',$data,$get_id);
        redirect('master_barang/size');
    }

}
