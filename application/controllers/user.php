<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'user/tampil_user';
		$isi['judul']		= 'Dashboard';
		$isi['sub_judul']	= 'User';
		$isi['data']		= $this->db->get('tb_user');
		$this->load->view('tampilan_home', $isi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'user/form_tambahuser';
		$isi['judul']		= 'Dashboard';
		$isi['sub_judul']	= 'Tambah User';
		$isi['username']	= '';
		$isi['password']	= '';
		$isi['passwordm']	= '';
		$this->load->view('tampilan_home', $isi);
	}

	public function edit()
	{
		$id  	   	= $this->input->post('id');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');

		$data = array('username' =>$username , 'password' =>$password);
		$this->db->where('id' , $id);
		$this->db->update('tb_user' , $data);
		
		redirect('user');
	}

	public function simpan($key)
	{
		$this->model_squrity->getsqurity();

		//$key = $this->input->post('id');
		$data['username']		= $this->input->post('username');
		$data['password']			= $this->input->post('password');
	
		$this->load->model('model_user');
		$query = $this->model_user->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_user->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses Disimpan Ya ');
		}
		else
		{
			$this->model_user->getinsert($data);
			$this->session->set_flashdata('info','Data Sukses Disimpan Ya ');
		}
		redirect('user');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_user');

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_user');
		if($query->num_rows()>0)
		{
			$this->model_user->getdelete($key);
		}
		redirect('user');
	}

	function delete_multiple() {
			$this->load->model('model_user');
			$this->msiswa->remove_checked_user();
			redirect('user');
		}

}
