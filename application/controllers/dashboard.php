<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        // Retrieve the username from the session data
        $data['username'] = $this->session->userdata('username');
        $this->load->view('dashboard', $data);
    }
}
