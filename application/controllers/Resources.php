<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {
	public function index()
	{

		$this->load->view('header');
		$this->load->view('resources/resources');
		$this->load->view('footer');
	}

	public function Technology()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post1');
		$this->load->view('footer');
	}
	public function Equity()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post2');
		$this->load->view('footer');
	}
	public function AI()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post3');
		$this->load->view('footer');
	}
	public function D2C_Brand()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post4');
		$this->load->view('footer');
	}
	public function D2C_Sales()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post5');
		$this->load->view('footer');
	}
	public function Relationships()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post6');
		$this->load->view('footer');
	}
	public function Product()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post7');
		$this->load->view('footer');
	}
	public function Funding()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post8');
		$this->load->view('footer');
	}
	public function D2C_Startups()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post9');
		$this->load->view('footer');
	}
	public function D2C_Brands()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post10');
		$this->load->view('footer');
	}
}
