<?php namespace App\Models;

use CodeIgniter\Model;

class Client_model extends Model
{
    public function construct()
    {
        parent::construct();
    }


    public function client()
    {		$db = \Config\Database::connect($default);
      $query   = $db->query('SELECT * FROM  client');
      $results = $query->getResultArray();
      return $results;
    }
    public function editarClient()
{ 

}
public function deletarClient()
{

  
}

} 
