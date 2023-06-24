<?php
class Login extends CI_Controller {
  
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }
  
    public function index() {
        $this->load->view('login');
    }
  
    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
      
        $user = $this->User_model->get_user($username, $password);
      
        if ($user) {
            // User exists, redirect to dashboard
            $this->session->set_userdata('username', $username);
            redirect('dashboard');
        } else {
            // User authentication failed, show error message
            $data['error'] = 'Invalid username or password';
            echo '<script>alert("' . $data['error'] . '");</script>';
            $this->load->view('login', $data);
        }
    }
}
?>
