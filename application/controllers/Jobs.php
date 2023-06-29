<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_model');
    }

    public function add(){
        $this->load->view('Add_job');
    }
    public function create() {
        $data = array(
            'name' => $this->input->post('name'),
            'des' => $this->input->post('des'),
            'salary' => $this->input->post('salary'),
            // Add other employee details based on your requirements
        );
        $this->Job_model->create_job($data);
        redirect('Employee'); 
    }

}
?>