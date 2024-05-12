<?php 
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class ModelBuilder {

    protected $db;
    public function __construct() 
    {
        $this->db = \Config\Database::connect();
    }

    public function getData() 
    {
        $builder = $this->db->table("products");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function joinData()
    {
        $builder = $this->db->table("products");
        $builder->select('products.id, products.product_name, product_details.image');
        $builder->join('product_details','products.id = product_details.id_product');
        $query = $builder->get()->getResult();

        return $query;
    }
}



?>