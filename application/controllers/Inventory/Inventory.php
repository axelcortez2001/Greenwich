<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('Inventory_model');

    }
    public function index()
    {
        $user = $this->session->userdata('user');
        if ($user) {
            // Pass the user data to the view
            $data['user'] = $user;
            $this->load->view('Inventory/Stocks', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }
    
    //go to buy products view
    // public function buy_prod(){
    //     $user = $this->session->userdata('user');
    //     if ($user) {
    //         // Pass the user data to the view
    //         $data['user'] = $user;
    //         $this->load->view('Inventory/Buy_products', $data);
    //     } else {
    //         // User data not found in session, redirect to login
    //         redirect('login');
    //     }
    // }

    public function add(){
        $this->load->view('Inventory/Add_prod');
    }
    public function add_prod()
{
    // Check if the file upload was successful
    if (!empty($_FILES['img']['name'])) {
        $imageFileName = $_FILES['img']['name'];

        // Configuration for file upload
        $config['upload_path'] = './uploads/'; // Set your upload directory path
        $config['allowed_types'] = 'gif|jpg|jpeg|png'; // Set allowed file types
        $config['max_size'] = 2048; // Set max file size in kilobytes

        $this->load->library('upload', $config);

        // Perform the file upload
        if ($this->upload->do_upload('img')) {
            // File uploaded successfully, get the uploaded file path
            $imageFilePath = $config['upload_path'] . $imageFileName;
        } else {
            // File upload failed, handle the error
            $uploadError = $this->upload->display_errors();
            // Redirect or show an error message
            redirect('Inventory/Inventory/add?error=' . urlencode($uploadError));
            return; // Stop further execution
        }
    } else {
        // No file uploaded, handle the error
        // Redirect or show an error message
        redirect('Inventory/Inventory/add?error=' . urlencode('No image file uploaded.'));
        return; // Stop further execution
    }

    // Prepare data to be inserted in the database
    $data = array(
        'name' => $this->input->post('name'),
        'price' => $this->input->post('price'),
        'supplier' => $this->input->post('supplier'),
        'img' => $imageFileName, // Save only the file name in the database
        'category' => $this->input->post('category')
    );

    // Call the model method to add the product
    $this->Inventory_model->create_prod($data);

    // Redirect to the product listing page or show a success message
    redirect('Inventory/Inventory/add');
}
        // Display all products
        public function all_products()
        {
            $user = $this->session->userdata('user');
            if ($user) {
                // Get all products from the model
                $data['products'] = $this->Inventory_model->get_all_products();

                // Pass the user data and product data to the view
                $data['user'] = $user;
                $this->load->view('Inventory/Buy_products', $data);
            } else {
                // User data not found in session, redirect to login
                redirect('login');
            }
        }


     //go to buy purchases view
     public function purchases(){
        $user = $this->session->userdata('user');
        if ($user) {
            // Pass the user data to the view
            $data['user'] = $user;
            $this->load->view('Inventory/purchases', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('login');
        }
    }
}
?>
