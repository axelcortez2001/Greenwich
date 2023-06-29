<?php
class Job_model extends CI_Model {

    public function create_job($data) {
        $this->db->insert('job', $data);
    }
}