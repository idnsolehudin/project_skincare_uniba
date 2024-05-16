<?php 
namespace App\Models;

use CodeIgniter\Model;

class InsertDetailModel extends Model {
    protected $table = 'product_details';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','id_product','rating','variant','slug','image','stock','price','description'];
    protected $useTimestamps = true;
}
