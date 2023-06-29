<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function add(){
        $this->load->view('Add_employee');
    }
    public function create() {
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone_no' => $this->input->post('phone_no'),
            'date_hired' => $this->input->post('date_hired'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post->post('password'),
        );
        $this->User_model->create_employee($data);
        redirect('Employee'); 
    }
}
?>