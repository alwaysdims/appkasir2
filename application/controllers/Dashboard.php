<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('role') !== 'Admin' and $this->session->userdata('role') !== 'Petugas'){
			redirect('auth');
		}
		
    }
	public function index()
	{
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('beranda');
		$this->load->view('layout/footer.php');
	}

}
