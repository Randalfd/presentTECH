<?php
namespace App\Models;

use CodeIgniter\Model;

class EmergencyDataModel extends Model
{
  protected $table      = 'emergency_data';
  protected $primaryKey = 'id_emergency_data';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'id_emergency_data', 
    'id_user',
    'guardian_phone',
    'guardian_phone2',
    'medical_record',
    'st_number',
    'id_adress'	
  ];
}