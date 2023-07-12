<?php

class Analytics_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_daily_sales()
    {
        $this->db->select('date, SUM(total_amount) as dailysales');
        $this->db->group_by('date');
        $query = $this->db->get('order_transaction');
        return $query->result();
    }
    public function get_monthly_sales()
    {
        $query = $this->db->query("SELECT DATE_FORMAT(date, '%M') as month, SUM(total_amount) as sales FROM order_transaction GROUP BY DATE_FORMAT(date, '%M') ORDER BY MIN(date)");
        return $query->result();
    }
}
