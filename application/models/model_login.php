<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {
	
	public function getlogin($u,$p)
	{
		$pwd = ($p);
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('tb_user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('nama'	=> $row->nama,
				'username'		=> $row->username);
				$this->session->set_userdata($sess);
				redirect('home');
			}
		}
		else
		{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('login');
		}
	}	
}