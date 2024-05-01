<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model {
    protected $table = 'produk';

    public function getProduk($id = false) {
        if ($id == false) {
           return $this-> findAll();
        }

        return $this->where(['id' =>  $id])-> first();
    }

    public function saveKategori($data) {
        return $this->insert($data);
    }
}

?>