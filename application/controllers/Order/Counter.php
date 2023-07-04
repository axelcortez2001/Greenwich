<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Inventory_model');
    }
    
    public function index(){
        $user = $this->session->userdata('user');
        if ($user) {
            // Get all products from the model
        $products = $this->Inventory_model->show_stock();
            // Check stock availability and update product data
            foreach ($products as $key => $product) {
                if ($product->stock > 0) {
                    $products[$key]->availability = 'Available';
                    $products[$key]->availabilityColor = 'text-green-500';
                } else {
                    $products[$key]->availability = 'Not Available';
                    $products[$key]->availabilityColor = 'text-red-500';
                }
            }
            $data['products'] = $products;
            $data['user'] = $user;
            $this->load->view('Order/Counter', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
        
    }
}
?>
