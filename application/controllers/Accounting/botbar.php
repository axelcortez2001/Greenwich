<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class botbar extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('User_model');
    $this->load->model('Accounting_model');
    $this->load->model('Order_model');
    }
    public function index()
        {
            $user = $this->session->userdata('user');
            if ($user) {
                $data['user'] = $user;
                // Pass the stocks data to the view
                $this->load->view('Accounting/purchases', $data);
            } else {
                // User data not found in session, redirect to login
                redirect('login');
            }
        }
    }

?>