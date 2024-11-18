<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lengan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('Lengan_model');
          
    }

	public function index(){
        
        $this->db->from('lengan');
        $this->db->order_by('lengan','ASC');
        $lengan['lengan'] = $this->db->get()->result_array();

        $this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('master_barang/lengan_index.php',$lengan);
		$this->load->view('layout/footer.php');
	}
    public function simpan(){
        $this->db->from('lengan');
        $this->db->where('lengan',$this->input->post('lengan'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Gagal ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
            redirect('master_barang/lengan');
            
        }
		$data = array(
            'lengan'     => $this->input->post('nama_lengan'),
        );
        $this->db->insert('lengan',$data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/lengan');
    }
    public function delete_data($id){
        $where = array('id_lengan' => $id);
        $this->db->delete('lengan', $where);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/lengan');
    }
    public function update(){
        $get_id = array(
            'id_lengan' => $this->input->post('id_lengan'));

        $data = array(
            'lengan' => $this->input->post('nama_lengan'),
            
        );

        $this->db->update('lengan',$data,$get_id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Berhasil diubah! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/lengan');
    }

}
