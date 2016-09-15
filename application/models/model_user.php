<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('tb_user');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id',$key);
		$this->db->update('tb_user',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('tb_user',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('tb_user');
	}

}
