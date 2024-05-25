<?php
namespace App\Models;
use CodeIgniter\Model;

class ClassroomsModel extends Model
{
  protected $table      = 'classrooms';
  protected $primaryKey = 'id_classroom';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'grade',
    'especiality',
    'id_shool'
  ];
  
  public function getClassrooms()
  {
    return $this->db->query("SELECT * FROM classrooms")->getResult();
  }
}