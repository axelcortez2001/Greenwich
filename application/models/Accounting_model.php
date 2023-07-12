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

    //Payrollssss
    public function getEmp() {
        $this->db->select('employee.*, job.name as job_name, job.des, job.salary');
        $this->db->select('COALESCE(SUM(payroll.pay_salary), 0) AS pay_salary');
        $this->db->from('employee');
        $this->db->join('job', 'employee.job_id = job.job_id', 'left');
        $this->db->join('payroll', 'employee.emp_id = payroll.emp_id', 'left');
        $this->db->group_by('employee.emp_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getEmpById($emp_id) {
        $this->db->select('employee.*, job.name as job_name, job.des, job.salary');
        $this->db->from('employee');
        $this->db->join('job', 'employee.job_id = job.job_id', 'left');
        $this->db->where('employee.emp_id', $emp_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function create_payroll($pays){
        $this->db->insert('payroll', $pays);
    }
    public function get_payrollById($emp_id){
        $this->db->select('*');
        $this->db->where('emp_id', $emp_id);
        $this->db->from('payroll');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_HRExpenses(){
        $this->db->select('COALESCE(SUM(pay_salary), 0) AS pay_salary');
        $this->db->from('payroll');
        $this->db->group_by('emp_id');
        $query = $this->db->get();
        $result = $query->row_array();
        $data['pay_salary'] = $result['pay_salary'];
        return $data;
    }
    public function get_AllExpenses(){
        $this->db->select('SUM(total_amount) AS total_amount');
        $this->db->from('product_purchase');
        $this->db->where('status', 'Paid');
        $query = $this->db->get();
        $result = $query->row_array();
        $paid_amount = $result['total_amount'];

        $this->db->select('SUM(pay_salary) AS pay_salary');
        $this->db->from('payroll');
        $query = $this->db->get();
        $result = $query->row_array();
        $total = $result['pay_salary'];

        $this->db->select('COALESCE(SUM(total_amount), 0) AS total_income');
        $this->db->from('order_transaction');
        $query = $this->db->get();
        $result = $query->row_array();
        $incom = $result['total_income'];

        $totalexpenses = $paid_amount + $total;
        $sale = $incom - $totalexpenses;
        $data['expenses'] = $totalexpenses;
        $data['income'] = $sale;
        return $data;
    }
}

?>