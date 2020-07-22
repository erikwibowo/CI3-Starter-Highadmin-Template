<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		admin();
	}

	public function index(){
		$x['title']		= "Data Admin - ".constant('webname');
		$x['master']	= "active";
		$x['data']		= $this->Madmin->read()->result();
		$this->load->view('admin/admin/index', $x,);
	}

	public function create(){
		$data = [
			'nama_admin'	=> $this->input->post('nama_admin'),
			'alamat_admin'	=> $this->input->post('alamat_admin'),
			'email_admin'	=> $this->input->post('email_admin'),
			'telp_admin'	=> $this->input->post('telp_admin'),
			'level_admin'	=> $this->input->post('level_admin'),
			'password'		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT)
		];
		if ($this->Madmin->insert($data)) {
			notif("Data berhasil disimpan", "success");
		}else{
			notif("Data gagal disimpan", "error");
		}
		redirect('admin/admin','refresh');
	}


	public function update(){
		if (empty($this->input->post('password'))) {
			$data = [
				'nama_admin'	=> $this->input->post('nama_admin'),
				'alamat_admin'	=> $this->input->post('alamat_admin'),
				'email_admin'	=> $this->input->post('email_admin'),
				'telp_admin'	=> $this->input->post('telp_admin'),
				'level_admin'	=> $this->input->post('level_admin'),
				'status'		=> $this->input->post('status')
			];
		}else{
			$data = [
				'nama_admin'	=> $this->input->post('nama_admin'),
				'alamat_admin'	=> $this->input->post('alamat_admin'),
				'email_admin'	=> $this->input->post('email_admin'),
				'telp_admin'	=> $this->input->post('telp_admin'),
				'level_admin'	=> $this->input->post('level_admin'),
				'password'		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'status'		=> $this->input->post('status')
			];
		}
		if ($this->Madmin->update($data, $this->input->post('id_admin'))) {
			notif("Data berhasil disimpan", "success");
		}else{
			notif("Data gagal disimpan", "error");
		}
		redirect('admin/admin','refresh');
	}

	public function delete($id){
		if ($this->Madmin->delete($id)) {
			notif("Data berhasil dihapus", "success");
		}else{
			notif("Data gagal dihapus", "error");
		}
		redirect('admin/admin','refresh');
	}

	public function data(){
		$id = $this->input->post('id');
		echo json_encode($this->Madmin->read_where(['id_admin' => $id])->row());
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/admin/Admin.php */