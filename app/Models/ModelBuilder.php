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
            $builder->select('*');
            $builder->join('product_details','products.id = product_details.id_product');

            $query = $builder->get()->getResult();

            return $query;  
    }

    public function getKategori() {
        $builder = $this->db->table("product_categories");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getDetail($slug) {
        $builder = $this->db->table("products");
        $builder->select("*");
        $builder->join("product_details", "products.id = product_details.id_product");
        $builder->join('product_categories',' products.category_id = product_categories.id ');
        $builder->where("product_details.slug", $slug);
        $detail = $builder->get()->getResult();
       

        return $detail;
    }

    public function delete($id) {
        $builder = $this->db->table("product_details");
        $builder->where("product_details.id_product", $id);
        $query = $builder->delete();

        return $query;
    }
}



?>