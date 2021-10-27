<?php namespace App\Models;

use CodeIgniter\Model;

class Suplier_model extends Model
{
    public function construct()
    {
        parent::construct();
    }


    public function suplier()
    {		$db = \Config\Database::connect($default);
      $query   = $db->query('SELECT * FROM  suplier');
      $results = $query->getResultArray();
      return $results;
    }
} 