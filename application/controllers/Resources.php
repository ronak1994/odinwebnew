<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {
	public function index()
	{
		$this->load->model('Admin_model');
		$data['posts'] = $this->Admin_model->get_posts_with_images();
		
		$category_counts = []; // To hold the count of each category
		$temp = []; // To hold processed blog data
		
		foreach ($data['posts'] as $p) {
			$p['url'] = $p['name'];
			$p['url'] = str_replace(' ', '-', $p['url']); // Replaces all spaces with hyphens.
			$p['url'] = preg_replace('/[^A-Za-z0-9\-]/', '', $p['url']); // Removes special chars.
			$p['url'] = strtolower($p['url']);
			$temp[] = $p;
		
//   echo "<pre>";
//         print_r($p['categorie']);
//         print_r($p['category']);
//         echo "</pre>";


			// Assuming categories are stored as a comma-separated string in $p['categories']
			if (($p['category']) && !empty($p['category'])) {
				$categories = explode(',', $p['category']); // Split categories into an array
				foreach ($categories as $category) {
					$category = trim($category); // Trim whitespace
					if (!empty($category)) {
						if (!isset($category_counts[$category])) {
							$category_counts[$category] = 0;
						}
						$category_counts[$category]++;
					}
				}
			}
		}
		
		$data['posts'] = $temp;
		$data['category_counts'] = $category_counts;
		
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
	
	
}
