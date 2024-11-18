<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('Model_model');
          
    }

	public function index(){
        
        $this->db->from('model');
        $this->db->order_by('model','ASC');
        $model['model'] = $this->db->get()->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('master_barang/model_index.php',$model);
		$this->load->view('layout/footer.php');
	}
    public function simpan(){
        $this->db->from('model');
        $this->db->where('model',$this->input->post('nama_model'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Gagal ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
            redirect('master_barang/model');
            
        }
		$data = array(
            'model'     => $this->input->post('nama_model'),
        );
        $this->db->insert('model',$data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/model');
    }
    public function delete_data($id){
        $where = array('id_model' => $id);
        $this->db->delete('model', $where);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/model');
    }
    public function update(){
        $get_id = array(
            'id_model' => $this->input->post('id_model'));

        $data = array(
            'model' => $this->input->post('nama_model'),
            
        );

        $this->db->update('model',$data,$get_id);
        redirect('master_barang/model');
    }

}
