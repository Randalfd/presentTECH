<?php
namespace App\Models;
use CodeIgniter\Model;

class LocationsModel extends Model
{
  protected $table      = 'locations';
  protected $primaryKey = 'id_location';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'id_user',
    'location_name',
    'autority_required'
  ];
}