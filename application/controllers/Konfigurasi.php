<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
	public function index()
	{	

		$this->db->select('*')->from('konfigurasi');
		$getKonfigurasi =$this->db->get()->row();

		$data = 
		[
			'judul' => 'Profil',
			'konfigurasi' =>$getKonfigurasi
		];

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('konfigurasi', $data);
		$this->load->view('layout/footer.php');
	}

	public function tambahKonfigurasi(){
		$data = [
			'nama' => $this->input->post('nama_cv'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp')
		];
		// var_dump($data);
		// die;
		$this->db->insert('konfigurasi',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function update(){

		$where = ['id_konfigurasi' => 1];
		$data = [
			'nama' => $this->input->post('nama_cv'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp')
		];
		$this->db->update('konfigurasi',$data,$where);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
