<?php

    class Order_model extends CI_Model{

        public function save_trans($data){
        $this->db->insert('order_transaction', $data);
        $transactionId = $this->db->insert_id();
        return $transactionId;
        }
        public function get_ordertransactions()
        {
            $query = $this->db->get('order_transaction');
            $transactions = $query->result();
        
            foreach ($transactions as $transaction) {
                $cartItems = unserialize($transaction->cart_data);
                $transaction->cart_items = $cartItems;
            }
        
            return $transactions;
        }
        public function get_totalsales(){
            $this->db->select('COALESCE(SUM(total_amount), 0) AS total_amount');
            $this->db->from('order_transaction');
            $query = $this->db->get();
            $result = $query->row_array();
            $data['total_amount'] = $result['total_amount'];
            return $data;
        }
        
    }
?>