<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {
	public function index()
	{
		
		$this->load->view('resources/comment');
	
	}
}