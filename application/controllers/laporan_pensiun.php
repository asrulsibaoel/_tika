<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pensiun extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'laporan_pensiun/tampil_laporanpensiun';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Laporan Pensiun';
		$isi['data']		= $this->db->get('tb_pensiun');
		$this->load->view('tampilan_home', $isi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'laporan_pensiun/form_tambahpensiun';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Tambah Data Pesiun';
		$isi['nama']			= '';
		$isi['keterangan']		= '';
		$isi['tahun_pensiun']	= '';
		$this->load->view('tampilan_home', $isi);
	}

	public function edit()
	{
		$id  	   = $this->input->post('id');
		$nama  	   = $this->input->post('nama');
		$keterangan  = $this->input->post('keterangan');
		$tahun_pensiun  = $this->input->post('tahun_pensiun');

		$data = array('nama' =>$nama , 'keterangan' =>$keterangan , 'tahun_pensiun' =>$tahun_pensiun );
		$this->db->where('id' , $id);
		$this->db->update('tb_pensiun' , $data);
		
		redirect('laporan_pensiun');
	}

	public function simpan($key)
	{
		$this->model_squrity->getsqurity();

		//$key = $this->input->post('id');
		$data['nama']			= $this->input->post('nama');
		$data['keterangan']			= $this->input->post('keterangan');
		$data['tahun_pensiun']		= $this->input->post('tahun_pensiun');

		$this->load->model('model_pensiun');
		$query = $this->model_pensiun->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_pensiun->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		else
		{
			$this->model_pensiun->getinsert($data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		redirect('laporan_pensiun');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pensiun');

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_pensiun');
		if($query->num_rows()>0)
		{
			$this->model_pensiun->getdelete($key);
		}
		redirect('laporan_pensiun');
	}

}
