<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $this->load->model("admin_model");
	}
 
	function index(){
        $result['post'] = $this->admin_model->get_post();
		$this->load->view('admin/admin',$result);
	}

    function add_page(){
        $this->load->view('admin/artikel-add');
    }

    function add_post(){
        $judul=$this->input->post('judul');
        $isi=$this->input->post('isi');

        $this->admin_model->add_post($judul,$isi);
        redirect('admin');
    }

    function delete(){
        $id = $this->uri->segment(3);
        $this->admin_model->delete($id);
        redirect('admin');
    }

    function edit(){
        $id = $this->uri->segment(3);
        $result = $this->admin_model->get_post_id($id);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'id'     => $i['id'],
                'judul'  => $i['judul'],
                'body'   => $i['body']
            );
            $this->load->view('admin/artikel-edit',$data);
        }else{
            echo "Data Was Not Found";
        }
    }

    function update(){
        $id = $this->uri->segment(3);
        $judul=$this->input->post('judul');
        $isi=$this->input->post('isi');
        $this->admin_model->update($id,$judul,$isi);
        redirect('admin');
    }

}