<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Side extends CI_Controller {
	public function index()
	{
		
		$this->load->view('resources/side');
	
	}
}