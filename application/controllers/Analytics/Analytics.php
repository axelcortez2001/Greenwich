<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Analytics extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Order_model');
        $this->load->model('Analytics_model');
        $this->load->model('Inventory_model');
    }
    public function index()
    {
        $user = $this->session->userdata('user');
        if ($user) {
            $data['user'] = $user;
            $data['daily_sales'] = $this->Analytics_model->get_daily_sales();
            $data['monthly_sales'] = $this->Analytics_model->get_monthly_sales();
            $transactions = $this->Order_model->get_ordertransactions();
            foreach ($transactions as $transaction) {
                $cartItems[$transaction->trans_id] = unserialize($transaction->cart_data);
            }
            // Get the top 5 highest quantity sales
            $topSales = [];
            foreach ($cartItems as $items) {
                foreach ($items as $item) {
                    $productId = $item['id'];
                    $quantity = $item['qty'];

                    if (isset($topSales[$productId])) {
                        $topSales[$productId] += $quantity;
                    } else {
                        $topSales[$productId] = $quantity;
                    }
                }
            }
            // Sort the top sales array in descending order
            arsort($topSales);
            // Get the top 5 products
            $topProducts = array_slice($topSales, 0, 5, true);
            // Retrieve the product names based on the product IDs
            $labels = [];
            foreach ($topProducts as $productId => $quantity) {
                $product = $this->Inventory_model->get_prodById($productId);
                if ($product) {
                    $labels[] = $product->name;
                }
            }
            $data['transactions'] = $transactions;
            $data['cartItems'] = $cartItems;
            $data['labels'] = $labels;
            $data['topProducts'] = $topProducts;
            $this->load->view('Analytics/Analytics', $data);
        } else {
            redirect('login');
        }
    }
}
