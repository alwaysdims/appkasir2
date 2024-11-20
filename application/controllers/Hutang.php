<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hutang extends CI_Controller {

	public function index()
	{
		$this->db->select('*')->from('hutang')->order_by('nota','DESC');
		$dataHutang = $this->db->get()->result_array();

		$data = [
			'dataHutang' =>$dataHutang
		];
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('hutang', $data);
		$this->load->view('layout/footer.php');
	}

	public function bayarHutang(){
		

		$data = [
			
		];
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('bayarHutang', $data);
		$this->load->view('layout/footer.php');
	}
}
