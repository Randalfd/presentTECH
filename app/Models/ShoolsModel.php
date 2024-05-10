<?php
namespace App\Models;
use CodeIgniter\Model;

class SchoolsModel extends Model
{
  protected $table      = 'schools';
  protected $primaryKey = 'id_school';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'school_name',
    'id_adress',
    'st_number'
  ];
  
}