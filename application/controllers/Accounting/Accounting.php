<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accounting extends CI_Controller
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
        // Retrieve the user data from the session
        $user = $this->session->userdata('user');
        if ($user) {
            // Pass the user data to the view
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['transactions'] = $this->Accounting_model->gettransactions();
            $data['sales'] = $this->Order_model->get_totalsales();
            $data['expenses'] = $this->Accounting_model->get_AllExpenses();
            $data['income'] = $this->Accounting_model->get_AllExpenses();
            // Pass the stocks data to the view
            $this->load->view('Accounting/purchases', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }
    public function show_purchases()
    {
        // Retrieve the user data from the session
        $user = $this->session->userdata('user');
        if ($user) {
            // Pass the user data to the view
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['expenses'] = $this->Accounting_model->get_AllExpenses();
            
            $this->load->view('Accounting/purchases', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }
    public function getPending(){
        $user = $this->session->userdata('user');
        if ($user) {
            // Pass the user data to the view
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['transactions'] = $this->Accounting_model->gettransactions();
            $data['sales'] = $this->Order_model->get_totalsales();
            $data['expenses'] = $this->Accounting_model->get_AllExpenses();
            $data['income'] = $this->Accounting_model->get_AllExpenses();
            $this->load->view('Accounting/purchases', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }
    //Update Pending purchases
    public function pay_purchase($purchase_id){
      $this->Accounting_model->pay_purchase($purchase_id);
      redirect('Accounting/Accounting');
    }

    //show sale transactions
    public function show_sales()
    {
        $user = $this->session->userdata('user');
        if ($user) {
            // Pass the user data to the view
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['sales'] = $this->Order_model->get_totalsales();
            $transactions = $this->Order_model->get_ordertransactions();
            $data['expenses'] = $this->Accounting_model->get_AllExpenses();
            $data['income'] = $this->Accounting_model->get_AllExpenses();
            $cartItems = array(); 
            
            foreach ($transactions as $transaction) {
                $cartItems[$transaction->trans_id] = unserialize($transaction->cart_data);
            }
            
            $data['transactions'] = $transactions;
            $data['cartItems'] = $cartItems;
            
            $this->load->view('Accounting/Sale', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }
    
    //show payroll view
    public function show_payroll(){
        $user = $this->session->userdata('user');
        if($user){
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['sales'] = $this->Order_model->get_totalsales();
            $data['Emp'] = $this->Accounting_model->getEmp();
            $data['EmpSal'] = $this->Accounting_model->get_HRExpenses();
            $data['expenses'] = $this->Accounting_model->get_AllExpenses();
            $data['income'] = $this->Accounting_model->get_AllExpenses();
            $this->load->view('Accounting/payroll', $data);
        }else{
            redirect('login');
        }
    }
    public function show_payrollByEmp($emp_id){
        $user = $this->session->userdata('user');
        if($user){
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['sales'] = $this->Order_model->get_totalsales();
            $data['PayEmp'] = $this->Accounting_model->getEmpById($emp_id);
            $data['GetPay'] = $this->Accounting_model->get_payrollById($emp_id);
            $data['expenses'] = $this->Accounting_model->get_AllExpenses();
            $data['income'] = $this->Accounting_model->get_AllExpenses();
            $this->load->view('Accounting/pay_payroll', $data);
        }else{
            redirect('login');
        }
    }
    public function show_addpayroll($emp_id){
        $user = $this->session->userdata('user');
        if($user){
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['sales'] = $this->Order_model->get_totalsales();
            $data['PayEmp'] = $this->Accounting_model->getEmpById($emp_id);
            $data['expenses'] = $this->Accounting_model->get_AllExpenses();
            $data['income'] = $this->Accounting_model->get_AllExpenses();
            $this->load->view('Accounting/add_payroll', $data);
        }else{
            redirect('login');
        }
    }
    public function addpayroll(){
        $user = $this->session->userdata('user');
        if($user){
            $emp_id = $this->input->post('emp_id');
            $pays = array(
                'emp_id' => $this->input->post('emp_id'),
                'job_id' => $this->input->post('job_id'),
                'from' => $this->input->post('from'),
                'to' => $this->input->post('to'),
                'date' => $this->input->post('date'),
                'pay_salary' => $this->input->post('pay_salary'),
            );
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['sales'] = $this->Order_model->get_totalsales();
            $data['PayEmp'] = $this->Accounting_model->getEmpById($emp_id);
            $this->Accounting_model->create_payroll($pays);
            redirect('Accounting/Accounting/show_payrollByEmp/' . $emp_id);
           
        }else{
            redirect('login');
        }
    }


}
?>