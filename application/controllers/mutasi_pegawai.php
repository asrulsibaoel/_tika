<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasi_pegawai extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'mutasi_pegawai/tampil_mutasipegawai';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Mutasi Pegawai';
		$isi['data']		= $this->db->get('tb_mutasi');
		$this->load->view('tampilan_home', $isi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'mutasi_pegawai/form_tambahmutasi';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Tambah Mutasi Pegawai';
		$isi['unit_kerja_lama']		= '';
		$isi['unit_kerja_baru']		= '';
		$isi['jabatan_baru']		= '';
		$isi['keterangan']			= '';
		$isi['tempat_mutasi']		= '';
		$this->load->view('tampilan_home', $isi);
	}

	public function edit()
	{
		$id  	   				= $this->input->post('id');
		$unit_kerja_lama		= $this->input->post('unit_kerja_lama');
		$unit_kerja_baru		= $this->input->post('unit_kerja_baru');
		$jabatan_baru			= $this->input->post('jabatan_baru');
		$keterangan				= $this->input->post('keterangan');
		$tempat_mutasi  		= $this->input->post('tempat_mutasi');

		$data = array('unit_kerja_lama' =>$unit_kerja_lama , 'unit_kerja_baru' =>$unit_kerja_baru , 'jabatan_baru' =>$jabatan_baru , 'keterangan' =>$keterangan , 'tempat_mutasi' =>$tempat_mutasi);
		$this->db->where('id' , $id);
		$this->db->update('tb_mutasi' , $data);
		
		redirect('mutasi_pegawai');
	}

	public function simpan($key)
	{
		$this->model_squrity->getsqurity();

		//$key = $this->input->post('id');
		$data['unit_kerja_lama']	= $this->input->post('unit_kerja_lama');
		$data['unit_kerja_baru']	= $this->input->post('unit_kerja_baru');
		$data['jabatan_baru']		= $this->input->post('jabatan_baru');
		$data['keterangan']			= $this->input->post('keterangan');
		$data['tempat_mutasi']		= $this->input->post('tempat_mutasi');

		$this->load->model('model_mutasipegawai');
		$query = $this->model_mutasipegawai->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_mutasipegawai->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		else
		{
			$this->model_mutasipegawai->getinsert($data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		redirect('mutasi_pegawai');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_mutasipegawai');

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_mutasi');
		if($query->num_rows()>0)
		{
			$this->model_mutasipegawai->getdelete($key);
		}
		redirect('mutasi_pegawai');
	}

}
