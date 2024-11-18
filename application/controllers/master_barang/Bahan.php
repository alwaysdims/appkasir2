<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('role') !== 'Admin' and $this->session->userdata('role') !== 'Petugas'){
			redirect('auth');
		}
		
    }
	public function index()
	{
		$this->db->from('bahan');
        $this->db->order_by('bahan','ASC');
        $bahan['bahan'] = $this->db->get()->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('master_barang/bahan.php',$bahan);
		$this->load->view('layout/footer.php');
	}

	public function simpan(){
		$data = array(
			'bahan' => $this->input->post('nama_bahan')
		);
		$this->db->insert('bahan',$data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
		redirect('master_barang/bahan');
	}

	public function delete_data($id){
        $where = array('id_bahan' => $id);
        $this->db->delete('bahan', $where);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
        redirect('master_barang/bahan');
    }
	public function update(){
        $get_id = array(
            'id_bahan' => $this->input->post('id_bahan'));

        $data = array(
            'bahan' => $this->input->post('nama_bahan'),
            
        );

        $this->db->update('bahan',$data,$get_id);
        redirect('master_barang/bahan');
    }
}
