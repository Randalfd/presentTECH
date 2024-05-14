<?php
namespace App\Models;
use CodeIgniter\Model;

class UsersSchoolDatesModel extends Model
{
  protected $table      = 'users_rooms';
  protected $primaryKey = 'id_user_room';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'id_user',
    'id_school_date'
  ];
  
  public function getUsersSchoolDates()
  {
    return $this->db->query("SELECT * FROM users_school_dates")->getResult();
  }
}