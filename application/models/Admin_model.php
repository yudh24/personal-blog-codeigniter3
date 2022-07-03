<?php

class Admin_model extends CI_Model
{
    function get_post(){
        $result = $this->db->query('SELECT * FROM post');
        return $result;
    }

    function add_post($judul,$isi){ 
        $result=$this->db->query("INSERT INTO post (judul,body) VALUES ('$judul','$isi')");
        return $result;
    }

    function delete($id){
        $this->db->where("id", $id);
        $this->db->delete('post');
    }

    function get_post_id($id){ 
        $result=$this->db->query("SELECT * FROM post WHERE id='$id'");
        return $result;
    }

    function update($id,$judul,$isi){
        $data = array(
            'judul' => $judul,
            'body' => $isi
        );
        $this->db->where('id', $id);
        $this->db->update('post', $data);
    }
}


?>