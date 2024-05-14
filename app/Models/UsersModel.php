<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table      = 'users';
  protected $primaryKey = 'id_user';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'id_user',
    'first_name',
    'last_name',
    'age',
    'DNI',
    'email',
    'password',
    'number_phone',
    'id_rol'
  ];

  public function getUserById($id_user)
  {
    return $this->db->query("SELECT * FROM users WHERE id_user = $id_user")->getResult();
  }

  public function getUsersRol()
  {
    return $this->db->query("
    SELECT u.id_user, u.first_name, u.last_name, u.age, u.DNI, u.email, u.password, u.number_phone, r.rol_name
    FROM users AS u
    INNER JOIN roles AS r
    ON u.id_rol = r.id_rol
    ")->getResult();
  }

}