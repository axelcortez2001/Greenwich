<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_model');
        $this->load->library('session');
    }

    public function index(){
        $user = $this->session->userdata('user');
        if ($user) {
            $data['user'] = $user;
            $data['jobs'] = $this->Job_model->getJobs();
            $this->load->view('HR/Job_management', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }
    
    //Go to edit Job Salary
    public function edit($job_id){
        $user = $this->session->userdata('user');
        if ($user) {
            $data['user'] = $user;
            $data['jobs'] = $this->Job_model->getJobId($job_id);
            $this->load->view('HR/Edit_job', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }
    //Update Job
    public function update($job_id)
    {
        $data = array(
            'des' => $this->input->post('des'),
            'salary' => $this->input->post('salary'),
        );
        $this->Job_model->update_job($job_id, $data);
        redirect('HR/Jobs');
    }
}
?>