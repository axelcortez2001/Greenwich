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
            
            //Authenticate User
            if ($user) {
                $userData = array(
                    'emp_id' => $user->emp_id,
                    'username' => $user->username,
                    'password' => $user->password,
                    'name' => $user->name,
                    'address' => $user->address,
                    'job_name' =>$user->job_name,
                );
                $this->session->set_userdata('user', $userData);
                if ($user->job_name === 'Cashier') {
                    $this->User_model->log_audit_entry('login', $user->emp_id);
                    redirect('Order/Counter');
                } else{
                    $this->User_model->log_audit_entry('login', $user->emp_id);
                    redirect('dashboard/main_dashboard');
                }
            } else {
                // User authentication failed, show error message
                $data['error'] = 'Invalid username or password';
                echo '<script>alert("' . $data['error'] . '");</script>';
                $this->load->view('login', $data);
            }
        }
        
}
