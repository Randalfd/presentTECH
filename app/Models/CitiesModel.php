<?php
namespace App\Models;
use CodeIgniter\Model;

class CitiesModel extends Model
{
  protected $table      = 'cities';
  protected $primaryKey = 'id_city';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'city_name',
    'postal_code'
  ];
  
}