<?php 
namespace App\Models;

use CodeIgniter\Model;

class InsertProdukModel extends Model {
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','category_id','product_name'];
    protected $useTimestamps = true;

}
