<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProdukModelView extends Model {
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    // protected $allowedFields = ['id','category_name'];

    // public function getProduk($id = false) {
    //     if ($id == false) {
    //        return $this-> findAll();
    //     }

    //     return $this->where(['id' =>  $id])-> first();
    // }


    public function saveKategori($data) {
        return $this->insert($data);
    }
}

?>