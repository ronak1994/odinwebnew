<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {
	public function index()
	{

		$this->load->model('Admin_model');
        $data['posts'] = $this->Admin_model->get_posts_with_images();
        foreach ($data['posts'] as $p) {
            $p['url'] = $p['name'];
            $p['url'] = str_replace(' ', '-', $p['url']); // Replaces all spaces with hyphens.

            $p['url'] = preg_replace('/[^A-Za-z0-9\-]/', '', $p['url']); // Removes special chars.
            $p['url'] = strtolower($p['url']);
            $temp[] = $p;
        }
        $data['posts'] = $temp;
//   echo "<pre>";
//         print_r($data['posts']);
//         echo "</pre>";
// 		die();
		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('resources/resources',$data);
		$this->load->view('footer');
	}

	public function post($id = null, $heading = "")
	{
		if (empty($id) && empty($heading)) {
            redirect(base_url() . 'blog');
        }

        $this->load->model('Admin_model');

        $post = [];
        if (!empty($id)) {
            // Fetch post by ID
            $post = $this->Admin_model->get_post($id);
        } elseif (!empty($heading)) {
            // Fetch post by heading if ID is not provided
            $posts = $this->Admin_model->get_posts();
            foreach ($posts as $p) {
                $temp = $p['name'];
                $p['name'] = str_replace(' ', '-', $p['name']);
                $p['name'] = preg_replace('/[^A-Za-z0-9\-]/', '', $p['name']);
                $p['name'] = strtolower($p['name']);
                if ($p['name'] == $heading) {
                    $p['name'] = $temp;
                    $post[] = $p;
                    break;
                }
            }
        }

        if (empty($post)) {
            redirect(base_url() . 'blog');
        }

        $data['post'] = $post[0];



        $data['posts'] = $this->Admin_model->get_posts_with_images();
        foreach ($data['posts'] as $p) {
            $p['url'] = $p['name'];
            $p['url'] = str_replace(' ', '-', $p['url']); // Replaces all spaces with hyphens.

            $p['url'] = preg_replace('/[^A-Za-z0-9\-]/', '', $p['url']); // Removes special chars.
            $p['url'] = strtolower($p['url']);
            $temp[] = $p;
        }
        $data['posts'] = $temp;
        // echo "<pre>";
        //     print_r($data['post']);
        //     echo "</pre>";
		$this->load->view('header');
		$this->load->view('resources/blog', $data);
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

		$this->load->model('Admin_model');
        $data['posts'] = $this->Admin_model->get_posts_with_images();
        foreach ($data['posts'] as $p) {
            $p['url'] = $p['name'];
            $p['url'] = str_replace(' ', '-', $p['url']); // Replaces all spaces with hyphens.

            $p['url'] = preg_replace('/[^A-Za-z0-9\-]/', '', $p['url']); // Removes special chars.
            $p['url'] = strtolower($p['url']);
            $temp[] = $p;
        }
        $data['posts'] = $temp;

		$this->load->view('header');
		$this->load->view('resources/technology/post9',$data);
		$this->load->view('footer');
	}
	public function D2C_Brands()
	{
		$this->load->view('header');
		$this->load->view('resources/technology/post10');
		$this->load->view('footer');
	}
}
