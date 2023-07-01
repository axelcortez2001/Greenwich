<?php
class Job_model extends CI_Model {

    public function create_job($data) {
        $this->db->insert('job', $data);
    }
    //get all jobs with number of employees
    public function getJobs() {
        $this->db->select('job.job_id, job.name, job.des, job.salary, COUNT(employee.emp_id) AS employee_count');
        $this->db->from('job');
        $this->db->join('employee', 'job.job_id = employee.job_id', 'left');
        $this->db->group_by('job.job_id');
        $query = $this->db->get();
        return $query->result_array();
    }
 
    public function getJobId($job_id)
    {
        $this->db->select('*');
        $this->db->from('job');
        $this->db->where('job_id', $job_id);
        $query = $this->db->get();
        return $query->row();
    }
    //Update Job
    public function update_job($job_id, $data)
    {
        $this->db->where('job_id', $job_id);
        $this->db->update('job', $data);
    }
}