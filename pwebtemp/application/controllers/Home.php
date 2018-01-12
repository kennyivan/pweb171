<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('home');	
		$this->load->view('layout/nav');
		$this->load->view('layout/footer');
	}

	public function pelangi()
	{
		$this->load->view('layout/header');
		$this->load->view('pelangi');
		$this->load->view('layout/footer');
	}

	public function kereta()
	{
		$this->load->view('layout/header');
		$this->load->view('kereta');
		$this->load->view('layout/footer');
	}

	public function cicak()
	{
		$this->load->view('layout/header');
		$this->load->view('cicak');
		$this->load->view('layout/footer');
	}

	public function balonku()
	{
		$this->load->view('layout/header');
		$this->load->view('balonku');
		$this->load->view('layout/footer');
	}

	public function kebunku()
	{
		$this->load->view('layout/header');
		$this->load->view('kebunku');
		$this->load->view('layout/footer');
	}
}
