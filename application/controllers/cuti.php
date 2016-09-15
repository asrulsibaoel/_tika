<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'cuti/tampil_datacuti';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Cuti';
		$isi['data']		= $this->db->get('tb_cuti');
		$this->load->view('tampilan_home', $isi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'cuti/form_tambahcuti';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Tambah Cuti';
		$isi['jenis_cuti']			= '';
		$isi['keterangan']			= '';
		$isi['tanggal_mulai']		= '';
		$isi['tanggal_selesai']		= '';
		$isi['lama_cuti']			= '';	
		$this->load->view('tampilan_home', $isi);
	}

	public function edit()
	{
		$id  = $this->input->post('id');
		$jenis_cuti  		= $this->input->post('jenis_cuti');
		$keterangan  		= $this->input->post('keterangan');
		$tanggal_mulai  	= $this->input->post('tanggal_mulai');
		$tanggal_selesai  	= $this->input->post('tanggal_selesai');
		$lama_cuti  		= $this->input->post('lama_cuti');

		$data = array('jenis_cuti' =>$jenis_cuti , 'keterangan' =>$keterangan , 'tanggal_mulai' =>$tanggal_mulai ,'tanggal_selesai' =>$tanggal_selesai ,'lama_cuti' =>$lama_cuti ,);
		$this->db->where('id' , $id);
		$this->db->update('tb_cuti' , $data);
		
		redirect('cuti');
	}

	public function simpan($key)
	{
		$this->model_squrity->getsqurity();

		//$key = $this->input->post('id');
		$data['jenis_cuti']			= $this->input->post('jenis_cuti');
		$data['keterangan']			= $this->input->post('keterangan');
		$data['tanggal_mulai']		= $this->input->post('tanggal_mulai');
		$data['tanggal_selesai']	= $this->input->post('tanggal_selesai');
		$data['lama_cuti']			= $this->input->post('lama_cuti');

		$this->load->model('model_cuti');
		$query = $this->model_cuti->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_cuti->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses Disimpan Ya ');
		}
		else
		{
			$this->model_cuti->getinsert($data);
			$this->session->set_flashdata('info','Data Sukses Disimpan Ya ');
		}
		redirect('cuti');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_cuti');

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_cuti');
		if($query->num_rows()>0)
		{
			$this->model_cuti->getdelete($key);
		}
		redirect('cuti');
	}

	

}
