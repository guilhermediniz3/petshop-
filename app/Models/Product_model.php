<?php namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model
{
    public function construct()
    {
        parent::construct();
    }


    public function products()
    {		$db = \Config\Database::connect($default);
      $query   = $db->query('SELECT * FROM products');
      $results = $query->getResultArray();
      return $results;
    }
} 