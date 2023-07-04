<?php

class Inventory_model extends CI_Model
{
    public function get_product()
    {
        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function create_prod($data)
    {
        $this->db->insert('product', $data);
    }
    public function get_all_products()
    {
        $query = $this->db->get('product');
        return $query->result();
    }

    public function show_stock()
    {
        $this->db->select('inventory.product_id, inventory.stock, inventory.price, product.name, product.img, product.category');
        $this->db->from('inventory');
        $this->db->join('product', 'inventory.product_id = product.product_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getStockByCategory($category)
    {
        $this->db->select('inventory.product_id, inventory.stock, inventory.price, product.name, product.img, product.category');
        $this->db->from('inventory');
        $this->db->join('product', 'inventory.product_id = product.product_id');
        $this->db->where('product.category', $category);
        $query = $this->db->get();

        return $query->result();
    }

    public function get_prodById($product_id)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_stockById($product_id)
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function updateStock($product_id, $newStock)
    {
        $this->db->set('stock', $newStock);
        $this->db->where('product_id', $product_id);
        $this->db->update('inventory');
    }

    //create purchase
    public function create_purchase($data)
    {
        $this->db->insert('product_purchase', $data);
    }

    //show all purchases
    public function show_purchase()
    {
        $this->db->select('product_purchase.product_id, product_purchase.purchase_id, product_purchase.total_amount, product_purchase.total_product, product_purchase.date, product.img, product.name, product.supplier');
        $this->db->from('product_purchase');
        $this->db->join('product', 'product_purchase.product_id = product.product_id');
        $this->db->order_by('product_purchase.purchase_id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
}

?>