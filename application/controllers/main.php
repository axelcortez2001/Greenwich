<?php
class Main extends CI_controller{
    public function index(){
        $this->load->model('User_model');
        $data['user'] = $this->User_model->get_user();
        $this->load->view('show_user', $data);
    }
}
?>