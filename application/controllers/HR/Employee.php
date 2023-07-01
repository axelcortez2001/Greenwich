<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Employee extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('User_model');
        }
        public function index() {
            // Retrieve the user data from the session
            $user = $this->session->userdata('user');
            if ($user) {
                // Pass the user data to the view
                $data['user'] = $user;
                $data['users'] = $this->User_model->getAllUsers();
                $this->load->view('HR/employee_management', $data);
            } else {
                // User data not found in session, redirect to login
                redirect('login');
            }
        }
        //Add Employee
        public function add(){
            $this->load->view('HR/Add_employee');
        }
        public function create_emp() {
            $data = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'phone_no' => $this->input->post('phone_no'),
                'date_hired' => $this->input->post('date_hired'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'job_id' => $this->input->post('job_id'),
            );
            $this->User_model->create_employee($data);
            redirect('HR/Employee'); 
        }
        public function delete($emp_id)
        {
            $this->User_model->delete_employee($emp_id);
            redirect('HR/Employee');
        }
        public function edit($emp_id)
        {
            $data['user'] = $this->User_model->getEmployeeById($emp_id);
            $this->load->view('HR/Edit_employee', $data);
        }
        public function update($emp_id)
        {
            $data = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'phone_no' => $this->input->post('phone_no'),
                'date_hired' => $this->input->post('date_hired'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'job_id' => $this->input->post('job_id'),
            );
            $this->User_model->update_employee($emp_id, $data);
            redirect('HR/Employee');
        }
        public function logout() {
            $this->session->unset_userdata('user'); 
            redirect('login');
        }
    }
?>