<?php

class Admin_model extends CI_Model
{

   

    function get_posts_with_images()
    {
        $this->db->select('user_blog.*, user_profile_images.image_path');
        $this->db->from('user_blog');
        $this->db->join('user_profile_images', 'user_blog.id = user_profile_images.user_id', 'left'); // 'left' join to include blogs without an image
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    function get_posts()
    {
        $query = $this->db->query("SELECT * FROM user_blog ");
        return $query->result_array();
    }
    function get_post_image($id)
    {
        $query = $this->db->query("SELECT * FROM user_profile_images WHERE user_id = $id");
        return $query->result_array();
    }
    function get_post($id)
    {
        $this->db->select('user_blog.*, user_profile_images.image_path');
        $this->db->from('user_blog');
        $this->db->join('user_profile_images', 'user_blog.id = user_profile_images.user_id', 'left'); 
        $this->db->where('user_blog.id', $id);
        // 'left' join to include blogs without an image
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
}
