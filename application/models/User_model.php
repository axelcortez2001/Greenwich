<?php
class User_model extends CI_Model {
  
    public function get_user($username, $password) {
        $this->db->select('employee.*, job.name as job_name');
        $this->db->from('employee');
        $this->db->join('job', 'employee.job_id = job.job_id', 'left');
        $this->db->where('employee.username', $username);
        $this->db->where('employee.password', $password);
        $query = $this->db->get();
        return $query->row();
    }
    public function getAllUsers($filter = null) {
        $this->db->select('employee.*, job.name as job_name');
        $this->db->from('employee');
        $this->db->join('job', 'employee.job_id = job.job_id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }
  
}
?>