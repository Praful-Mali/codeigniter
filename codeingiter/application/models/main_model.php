<?php

class Main_model extends CI_Model
{

    private $db;


    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
        $this->load->helper('date');
    }

    public function insert_data($table,$data,$database = '')
    {
        if($database != ''){
            $this->db = $this->load->database($database,true);
        } else {
            $this->db = $this->load->database('default',true);
        }
        $query = $this->db->insert($table,$data);
        if($query)
            return true;
        else
            return false;
    }

    public function check_exists($column,$table,$cond)
    {
        $this->db = $this->load->database('default',true);
        $query = $this->db->select($column)->get_where($table,$cond);
        return $query->num_rows();
    }

    public function update_data($table,$data,$cond,$database = '')
    {
        if($database != ''){
            $this->db = $this->load->database($database,true);
        } else {
            $this->db = $this->load->database('default',true);
        }
        $query = $this->db->update($table,$data,$cond);
        if($query)
            return true;
        else
            return false;
    }

    public function delete($table,$cond)
    {
        $this->db = $this->load->database('default',true);
        $query = $this->db->delete($table,$cond);
        if($query) return true;
        else return false;
    }

    public function select_where($columns = '', $table, $where = '' ,$order_column = '' ,$group_by = '' ,$limit = '', $offset = '')
    {
        $this->db = $this->load->database('default',true);
        if($columns != ''){
            $this->db->select($columns);
        }
        if($where != ''){
            $this->db->where($where);
        }
        if($order_column != ''){
            $this->db->order_by($order_column);
        }
        if($group_by != ''){
            $this->db->group_by($group_by);
        }
        if($limit != '' && $offset == ''){
            $this->db->limit($limit);
        }
        if($limit != '' && $offset != ''){
            $this->db->limit($limit,$offset);
        }

        $query =$this->db->get($table);
        if($query->num_rows()>0){
            return $query->result_array();
        } else{
            return false;
        }
    }
}