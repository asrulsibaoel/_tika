<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'tampil_dashboard';
		$isi['judul']		= 'Home';
		$isi['sub_judul']	= '';
		$this->load->view('tampilan_home', $isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
//<div class="alert bg-success" role="alert">
	//<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Selamat Datang Sistem Informasi Pegawai Java Valley Technology <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
//</div>
