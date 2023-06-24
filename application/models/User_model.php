<?php
class User_model extends CI_Model {
  
    public function get_user($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('employee');
        return $query->row();
    }
  
}
?>