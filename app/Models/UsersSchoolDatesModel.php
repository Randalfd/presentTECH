<?php
namespace App\Models;
use CodeIgniter\Model;

class UsersSchoolDatesModel extends Model
{
  protected $table      = 'users_school_dates';
  protected $primaryKey = 'id_user_school_date';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'id_user',
    'id_school_date'
  ];
  
}