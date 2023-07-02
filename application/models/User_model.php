<?php
class User_model extends CI_Model {

    //audit logs
    public function log_audit_entry($action, $user_id) {
        $data = array(
            'action' => $action,
            'user_id' => $user_id,
            'timestamp' => date('Y-m-d H:i:s')
        );
        $this->db->insert('audit_log', $data);
    }

    public function get_user($username, $password) {
        $this->db->select('employee.*, job.name as job_name');
        $this->db->from('employee');
        $this->db->join('job', 'employee.job_id = job.job_id', 'left');
        $this->db->where('employee.username', $username);
        $this->db->where('employee.password', $password);
        $query = $this->db->get();
        return $query->row();
    }
    public function getAllUsers() {
        $this->db->select('employee.*, job.name as job_name');
        $this->db->from('employee');
        $this->db->join('job', 'employee.job_id = job.job_id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function create_employee($data){
        $this->db->insert('employee', $data);
    } 
    public function delete_employee($emp_id)
    {
        $this->db->where('emp_id', $emp_id);
        $this->db->delete('employee');
    }
    public function getEmployeeById($emp_id)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('emp_id', $emp_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function update_employee($emp_id, $data)
    {
        $this->db->where('emp_id', $emp_id);
        $this->db->update('employee', $data);
    }
}
?>