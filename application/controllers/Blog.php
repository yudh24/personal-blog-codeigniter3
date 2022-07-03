<?php 

class Blog extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model("blog_model");
    }

    function index(){
        $result['post'] = $this->blog_model->get_post();
        $this->load->view("blog/post.php",$result);
    }

    function detail($id){
        $data=$this->blog_model->get_post_id($id);
        if($data->num_rows() > 0){
            $result['post_detail']= $data;
            $this->load->view('blog/post_detail.php',$result);
        }else{
            redirect('blog');
        }
         
    }

    function about(){
        $result['about'] = $this->blog_model->about();
        $this->load->view("blog/about",$result);
    }
}


?>