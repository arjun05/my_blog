<?php

class Comments extends CI_Controller
{
    function add_comment($postID)
    {
        if(!$this->input->post())
        {
            redirect(base_url().'index.php/blog/post'.$postID);
        }        
              
        $this->load->model('m_comment');
        $data = array(
            'post_id' => $postID,            
            'comment' => $this->input->post('comment'),
        );
        $this->m_comment->add_comment($data);
        redirect(base_url().'index.php/blog/post/'.$postID);
    }
}