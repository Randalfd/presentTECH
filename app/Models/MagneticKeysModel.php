<?php
namespace App\Models;

use CodeIgniter\Model;

class MagneticKeysModel extends Model
{
  protected $table      = 'magnetic_keys';
  protected $primaryKey = 'id_mk';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'code',
    'status',
    'id_user' 
  ];

  public function getMagneticKeyById($id_mk)
  {
    return $this->db->query("SELECT * FROM magnetic_keys WHERE id_mk = $id_mk")->getResult();
  }

  public function getMkWhitUser($id_user)
  {
    return $this->db->query("
    SELECT mk.id_mk, mk.code, mk.status, u.first_name, u.last_name
    FROM magnetic_keys AS mk
    INNER JOIN users AS u
    ON mk.id_user = u.id_user
    WHERE u.id_user = $id_user
    ")->getResult();
  }
}
?>