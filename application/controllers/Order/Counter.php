<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Inventory_model');
        $this->load->model('Order_model');
        $this->load->library('cart');
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
            $cartItems = $this->cart->contents();
            $totalPrice = 0;
            foreach ($cartItems as $item) {
                $totalPrice += $item['subtotal'];
            }
            $data['cartItems'] = $cartItems;
            $data['totalPrice'] = $totalPrice;
            $data['products'] = $products;
            $data['user'] = $user;
            $this->load->view('Order/Counter', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        } 
    }
    public function add_cart(){
    $user = $this->session->userdata('user');
    if ($user) {
        $product_id = $this->input->post('product_id');
        $stock = $this->input->post('stock');
        $price = $this->input->post('price');
        $name = $this->input->post('name');
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
        // Check if the product is available in stock
        if ($stock > 0) {
            // Add the product to the cart
            $this->cart->insert(array(
                'id' => $product_id,
                'qty' => 1,
                'price' => $price,
                'name' => $name
            ));

            // Get the updated cart items
            $cartItems = $this->cart->contents();
            $totalPrice = 0;
            foreach ($cartItems as $item) {
                $totalPrice += $item['subtotal'];
            }
            $data['products'] = $products;
            $data['user'] = $user;
            $data['cartItems'] = $cartItems;
            $data['totalPrice'] = $totalPrice;
            $this->load->view('Order/Counter', $data);
        } else {
            // FOR VALIDATIONNNNNNNN
        }
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }   
    public function removeCartItem($rowid)
        {
            $user = $this->session->userdata('user');
            if ($user) {
                $products = $this->Inventory_model->show_stock();
                $this->cart->remove($rowid);
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
                    // Get the updated cart items
                    $cartItems = $this->cart->contents();
                    $totalPrice = 0;
                    foreach ($cartItems as $item) {
                        $totalPrice += $item['subtotal'];
                    }
                    $data['products'] = $products;
                    $data['user'] = $user;
                    $data['cartItems'] = $cartItems;
                    $data['totalPrice'] = $totalPrice;
                    $this->load->view('Order/Counter', $data);
                } else {
                    redirect('login');
                    
                }
            }

    public function save_transaction(){
        // Get user data from session
        $user = $this->session->userdata('user');
        
        if ($user) {
            $cartItems = $this->cart->contents();
            $totalPrice = $this->cart->total();
            $payment = $this->input->post('payment');
            $change = $payment - $totalPrice;
            $data = array(
                'emp_id' => $user['emp_id'],
                'total_amount' => $totalPrice,
                'payment' => $payment,
                'change' => $change,
                'cart_data' => serialize($cartItems)
            );
            $this->Order_model->save_trans($data);
            $this->cart->destroy();
            $data['success'] = 'New Transaction has been save!';
            echo '<script>alert("' . $data['success'] . '");</script>';
            redirect('Order/Counter');
        } else {
            // Redirect to login page if user is not logged in
            redirect('login');
        }
    }
}
?>
