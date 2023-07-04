<?php

    class Inventory_model extends CI_Model {
            
    public function get_product(){
        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function create_prod($data){
        $this->db->insert('product', $data);
    } 
    public function get_all_products(){
        $query = $this->db->get('product');
        return $query->result();
    }

    public function show_stock(){
        $this->db->select('inventory.product_id, inventory.stock, inventory.price, product.name, product.img, product.category');
        $this->db->from('inventory');
        $this->db->join('product', 'inventory.product_id = product.product_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getStockByCategory($category) {
        $this->db->select('inventory.product_id, inventory.stock, inventory.price, product.name, product.img, product.category');
        $this->db->from('inventory');
        $this->db->join('product', 'inventory.product_id = product.product_id');
        $this->db->where('product.category', $category);
        $query = $this->db->get();
        
        return $query->result();
    }

    public function create_purchase($product_id){
        
    }

}

?>