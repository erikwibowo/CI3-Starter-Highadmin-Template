<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	private $table = "tb_admin"; 
	private $primary_key = "id_admin"; 

	public function read(){
		return $this->db->get($this->table);
	}

	public function read_where($where){
		$this->db->where($where);
		return $this->db->get($this->table);
	}

	public function insert($data){
		return $this->db->insert($this->table, $data);
	}

	public function update($data, $id){
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id){
		$this->db->where($this->primary_key, $id);
		return $this->db->delete($this->table);
	}

}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */