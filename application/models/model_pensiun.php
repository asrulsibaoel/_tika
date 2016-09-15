<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pensiun extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('tb_pensiun');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id',$key);
		$this->db->update('tb_pensiun',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('tb_pensiun',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('tb_pensiun');
	}

}
