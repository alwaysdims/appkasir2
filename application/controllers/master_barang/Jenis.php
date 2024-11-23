<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('Jenis_model');
          
    }

	public function index(){
        
        $this->db->from('jenis');
        $this->db->order_by('jenis','ASC');
        $jenis = $this->db->get()->result_array();
		
		$data = [
			'judul' => 'Jenis',
			'jenis' => $jenis
		];

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('master_barang/jenis_index.php',$data);
		$this->load->view('layout/footer.php');
	}
    public function simpan(){
        $this->db->from('jenis');
        $this->db->where('jenis',$this->input->post('nama_jenis'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data Gagal ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
            redirect('master_barang/jenis');
            
        }
        $data = array(
            'jenis'     => $this->input->post('nama_jenis'),
        );
        $this->db->insert('jenis',$data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/jenis');
    }
    public function delete_data($id){
        $where = array('id_jenis' => $id);
        $this->db->delete('jenis', $where);
        $this->session->set_flashdata('');
        redirect('master_barang/jenis');
    }
    public function update(){
        $get_id = array(
            'id_jenis' => $this->input->post('id_jenis'));

        $data = array(
            'jenis' => $this->input->post('nama_jenis'),
        );

        $this->db->update('jenis',$data,$get_id);
        redirect('master_barang/jenis');
    }

}
