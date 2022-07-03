<? 

class Blog_model extends CI_Model
{
    function get_post(){
        $result = $this->db->query('SELECT * FROM post');
        return $result;
    }

    function get_post_id($id){ 
        $result=$this->db->query("SELECT * FROM post WHERE id='$id'");
        return $result;
    }
    
    function about(){
        $result = $this->db->get('about');
        return $result;
    }
}


?>