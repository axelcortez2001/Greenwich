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
        $oldqty = $this->Inventory_model->get_stockById($product_id);
        $newStock = $oldqty->stock - 1;
        // Check if the product is available in stock
        if ($stock > 0) {
            // Add the product to the cart
            $this->cart->insert(array(
                'id' => $product_id,
                'qty' => 1,
                'price' => $price,
                'name' => $name
            ));
            $this->Inventory_model->updateStock($product_id, $newStock);
           
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
            $data['fail'] = 'Ooops! Out of stock';
            echo '<script>alert("' . $data['fail'] . '");</script>';
            $this->load->view('Order/Counter', $data);
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
                $carts = $this->cart->get_item($rowid);
                    $productId = $carts['id'];
                    $quantity = $carts['qty'];
                    $oldqty = $this->Inventory_model->get_stockById($productId);
                    $newStock = $oldqty->stock + $quantity;
                    $this->cart->remove($rowid);
                    $this->Inventory_model->updateStock($productId, $newStock);
                    redirect('Order/Counter');
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
            $date = date('Y-m-d H:i:s');
            $data = array(
                'emp_id' => $user['emp_id'],
                'total_amount' => $totalPrice,
                'payment' => $payment,
                'change' => $change,
                'date' => $date,
                'cart_data' => serialize($cartItems)
            );
            if($payment > $totalPrice){
                $this->Order_model->save_trans($data);
                $this->cart->destroy();
                redirect('Order/Counter');
            }else{
                $this->session->set_flashdata('fail', 'Not Enough Payment!');
                redirect('Order/Counter');
            }   
            
        } else {
            // Redirect to login page if user is not logged in
            redirect('login');
        }
    }
}
?>
