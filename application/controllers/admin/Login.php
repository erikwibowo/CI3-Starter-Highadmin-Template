<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		if (!empty($this->session->userdata('id_admin'))) {
			notif("Selamat datang kembali ".admin()->nama_admin, "info");
			redirect('admin','refresh');
		}
		$x['title']		= "Login Admin - ".constant('webname');
		$this->load->view('admin/login/index', $x);
	}

	public function auth(){
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$data = $this->Madmin->read_where(['email_admin' => $email]);

		if ($data->num_rows() == 0) {
			notif("Email dan password tidak sesuai", "error");
		}else{
			$admin = $data->row();
			if (password_verify($pass, $admin->password)) {
				$datasession = [
					'id_admin'	=> $admin->id_admin
				];
				
				$this->session->set_userdata( $datasession );
				notif("Selamat datang ".$admin->nama_admin, "info");
				if ($admin->level_admin == "SUPER ADMIN") {
					redirect('admin','refresh');
				}
			}else{
				notif("Email dan password tidak sesuai", "error");
			}
		}
		redirect('admin/login','refresh');
	}

	public function logout(){
		$datasession = [
			'id_admin'
		];
		$this->session->unset_userdata($datasession);
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */