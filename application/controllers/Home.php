<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home/home_new');
		$this->load->view('footer');
	
	}
}
