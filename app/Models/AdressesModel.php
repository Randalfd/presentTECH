<?php
namespace App\Models;
use CodeIgniter\Model;

class AdressesModel extends Model
{
  protected $table      = 'adresses';
  protected $primaryKey = 'id_adress';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'adress',
    'id_city'
  ];
  
  public function getAdresses()
  {
    return $this->db->query("SELECT * FROM adresses")->getResult();
  }
}