<?php

class Blog extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_db');
    }

    function index($start = 0)
    {
        $data['posts'] = $this->m_db->get_posts(5, $start);

        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/blog/index/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links(); //Links of pages

        $class_name = array('home_class' => 'current', 'login_class' => '');
        $this->load->view('header', $class_name);
        $this->load->view('v_home', $data);
        $this->load->view('footer');
    }    

    function post($post_id)
    {
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_comment($post_id);
        $data['post'] = $this->m_db->get_post($post_id);
        $class_name = ['home_class' => 'current', 'login_class' => ''];
        $this->load->view('header', $class_name);
        $this->load->view('v_single_post', $data);
        $this->load->view('footer');
    }

    function new_post()
    {
       
        if ($this->input->post()) {
            $data = array('post_title' => $this->input->post('post_title'), 'post' => $this->input->post('post'));
            $this->m_db->insert_post($data);
            redirect(base_url() . 'index.php/blog/');
        } else {

            $class_name = ['home_class' => 'current', 'login_class' => ''];
            $this->load->view('header', $class_name);
            $this->load->view('v_new_post');
            $this->load->view('footer');
        }
    }
   
    function editpost($post_id)
    {
        
        $data['success'] = 0;

        if ($this->input->post()) {
            $data = array('post_title' => $this->input->post('post_title'), 'post' => $this->input->post('post'));
            $this->m_db->update_post($post_id, $data);
            $data['success'] = 1;
        }
        $data['post'] = $this->m_db->get_post($post_id);

        $class_name = ['home_class' => 'current', 'login_class' => ''];
        $this->load->view('header', $class_name);
        $this->load->view('v_edit_post', $data);
        $this->load->view('footer');
    }

    function deletepost($post_id)
    {       
        $this->m_db->delete_post($post_id);
        redirect(base_url() . 'index.php/blog/');
    }
}