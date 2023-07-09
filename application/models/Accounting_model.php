<?php

class Accounting_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getPending()
    {
        $this->db->select('COALESCE(SUM(total_amount), 0) AS total_amount');
        $this->db->from('product_purchase');
        $this->db->where('status', 'Pending');
        $query = $this->db->get();
        $result = $query->row_array();
        $data['total_amount'] = $result['total_amount'];
    
        $this->db->select('SUM(total_amount) AS total_amount');
        $this->db->from('product_purchase');
        $this->db->where('status', 'Paid');
        $query = $this->db->get();
        $result = $query->row_array();
        $data['paid_amount'] = $result['total_amount'];
    
        $this->db->from('product_purchase');
        $this->db->where('status', 'Pending');
        $data['data_count'] = $this->db->count_all_results();
    
        $this->db->from('product_purchase');
        $this->db->where('status', 'Paid');
        $data['paid_count'] = $this->db->count_all_results();
        
        return $data;
    }
    
    public function gettransactions(){
        $this->db->select('product_purchase.*, product.name, product.category');
        $this->db->from('product_purchase');
        $this->db->join('product', 'product_purchase.product_id = product.product_id');
        $query = $this->db->get();
        return $query->result();
    }
    public function pay_purchase($purchase_id){
        $this->db->set('status', 'Paid');
        $this->db->where('purchase_id', $purchase_id);
        $this->db->update('product_purchase');
    }
}

?>