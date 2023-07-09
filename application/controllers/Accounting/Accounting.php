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
            $statuses = ['Pending', 'Paid'];
            $data['user'] = $user;
            $data['Pending'] = $this->Accounting_model->getPending();
            $data['transactions'] = $this->Accounting_model->gettransactions();
            $data['sales'] = $this->Order_model->get_totalsales();
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
            
            $cartItems = array(); // Initialize the $cartItems array
            
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
    


}
?>