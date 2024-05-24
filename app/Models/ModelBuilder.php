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

    public function fullJoinDetail($slug) {
    // Left Join
    $left_join = $this->db->table("products");
    $left_join->select("products.product_name, product_categories.category_name, products.category_id, product_details.*");
    $left_join->join('product_details', 'products.id = product_details.id_product', 'left');
    $left_join->join('product_categories', 'products.category_id = product_categories.id', 'left');


    // Right Join
    $right_join = $this->db->table("products");
    $right_join->select("products.product_name, product_categories.category_name, products.category_id, product_details.*");
    $right_join->join('product_details', 'products.id = product_details.id_product', 'right');
    $right_join->join('product_categories', 'products.category_id = product_categories.id', 'right');


    // Menggabungkan query dengan UNION ALL
    $left_query = $left_join->getCompiledSelect();
    $right_query = $right_join->getCompiledSelect();

    // Menggunakan parameter binding
    $full_join = $this->db->query("SELECT * FROM ($left_query UNION $right_query) as combined WHERE slug = ?", [$slug]);

    $details = $full_join->getResult();

    return $details;
        
    }

    public function fullJoin() {
    // Left Join
    $left_join = $this->db->table("products");
    $left_join->select("products.product_name, product_categories.category_name,products.category_id, product_details.*");
    $left_join->join('product_details', 'products.id = product_details.id_product', 'left');
    $left_join->join('product_categories', 'products.category_id = product_categories.id', 'left');


    // Right Join
    $right_join = $this->db->table("products");
    $right_join->select("products.product_name, product_categories.category_name, products.category_id, product_details.*");
    $right_join->join('product_details', 'products.id = product_details.id_product', 'right');
    $right_join->join('product_categories', 'products.category_id = product_categories.id', 'right');


    // Menggabungkan query dengan UNION ALL
    $left_query = $left_join->getCompiledSelect();
    $right_query = $right_join->getCompiledSelect();

    // Menggunakan parameter binding
    $full_join = $this->db->query("SELECT * FROM ($left_query UNION $right_query) as combined ");

    $details = $full_join->getResult();

    return $details;
        
    }

    public function delete($id) {
        $builder = $this->db->table("product_details");
        $builder->where("product_details.id_product", $id);
        $query = $builder->delete();

        return $query;
    }
}



?>