<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Cek apakah pengguna sudah login, kecuali untuk metode `logout`
        if ($this->session->userdata('logged_in') && $this->router->method !== 'logout') {
            redirect('dashboard'); // Arahkan ke halaman dashboard jika sudah login
        }
    }

    public function index() {

		$data = ['judul' => 'Login'];

        $this->load->view('login',$data); // Tampilkan halaman login
    }

    public function login() {
        // Validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan form lagi
			$this->session->set_flashdata('notif', 'Username atau password salah');
            $this->load->view('login');
        } else {
            // Ambil input dari user
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Periksa username dan password
            $user = $this->User_model->get_user_by_username($username);

            if ($user && password_verify($password, $user->password)) {
                // Jika login berhasil, buat session
                $session_data = [
                    'id_user' => $user->id_user,
                    'username' => $user->username,
                    'nama' => $user->nama,
                    'role' => $user->role,
                    'alamat' => $user->alamat,
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($session_data);

                // Redirect ke halaman dashboard atau halaman utama
                redirect('dashboard');
            } else {
                // Jika login gagal
				$this->session->set_flashdata('notif', 'Username atau password salah');
				redirect($_SERVER["HTTP_REFERER"]);
            }
        }
    }

    public function logout() {
        // Hapus semua data sesi
        $this->session->sess_destroy();

        // Redirect ke halaman login
        redirect('auth');
    }
}
