<?php
class User_product_model extends CI_Model
{
    public $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "user_products";

    }

    public function get_all($where = array())
    {
        return $this->db->where($where)->get($this->table)->result();
    }
}