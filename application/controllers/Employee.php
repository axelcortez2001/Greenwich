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
                $this->load->view('employee_management', $data);
            } else {
                // User data not found in session, redirect to login
                redirect('login');
            }
        }
        public function logout() {
            $this->session->unset_userdata('user'); 
            redirect('login');
        }
    }
?>