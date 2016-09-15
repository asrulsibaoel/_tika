<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'profil/tampil_profil';
		$isi['judul']		= 'Dashboard';
		$isi['sub_judul']	= 'Tampilan Profil';
		$this->load->view('tampilan_home', $isi);
	}
}
