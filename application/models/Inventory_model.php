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
        public function get_all_products()
    {
        $query = $this->db->get('product');
        return $query->result();
    }
    }

?>