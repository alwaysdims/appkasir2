<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('role') !== 'Admin' and $this->session->userdata('role') !== 'Petugas'){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->db->select('*')->from('user')->order_by('nama','ASC');
		$get = $this->db->get()->result_array();

		$data = [
			'judul' => 'User',
			'user' => $get,
		];

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('user',$data);
		$this->load->view('layout/footer.php');
	}

	public function addUser(){
		$getUsername = $this->input->post('username');
		$this->db->from('user')->where('username',$getUsername);
		$cek = $this->db->get()->result_array();

		if($cek == null){
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'alamat' => $this->input->post('alamat'),
				'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
				'role' => $this->input->post('role'),
			);

			$this->db->insert('user',$data);
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
			redirect('user');
		}else{
			
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Username sudah ada yang menggunakannya! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
			redirect('user');
		}

	}

	public function update(){
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'role' => $this->input->post('role'),
		);
		$getId = array('id_user' => $this->input->post('id_user'));
		$this->db->update('user',$data,$getId);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil diupdate! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
		redirect('user');

	}

	public function delete($id){

		$getId = array('id_user' => $id);

		$this->db->delete('user',$getId);
		$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
		redirect('user');
	}
}
