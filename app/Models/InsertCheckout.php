<?php 
namespace App\Models;

use CodeIgniter\Model;

class InsertCheckout extends Model {
    protected $table = 'carts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','id_product','id_user','qty','price_total'];
    protected $useTimestamps = true;
}
