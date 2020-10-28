<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('akademik');
		$this->load->view('template/footer');
	}

	public function guru()
	{
		$this->load->view('template/header');
		$this->load->view('guru');
		$this->load->view('template/footer');
	}
	public function statistik ()
	{
		$this->load->view('template/header');
		$this->load->view('statistik');
		$this->load->view('template/footer');
	}
}

