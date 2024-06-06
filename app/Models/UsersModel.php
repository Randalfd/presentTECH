<?php
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
  protected $table      = 'users';
  protected $primaryKey = 'id_user';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $allowedFields = [
    'id_user',
    'first_name',
    'last_name',
    'DNI',
    'email',
    'password',
    'id_rol'
  ];

  public function getUsers()
  {
    return $this->db->query("SELECT * FROM users")->getResult();
  }

  public function getUserById($id_user)
  {
    return $this->db->query("SELECT * FROM users WHERE id_user = $id_user")->getResult();
  }

  public function getUsersByEmail($email)
  {
    return $this->db->query("SELECT * FROM users WHERE email = '$email'")->getResult();
  }
  public function getUsersRol()
  {
    return $this->db->query("
    SELECT u.id_user, u.first_name, u.last_name, u.DNI, u.email, u.password, r.rol_name
    FROM users AS u
    INNER JOIN rols AS r
    ON u.id_rol = r.id_rol
    ")->getResult();
  }


    return $this->db->query("
    SELECT u.id_user, u.first_name, u.last_name, u.DNI, u.email, u.password, r.rol_name
    FROM users AS u
    INNER JOIN rols AS r
    ON u.id_rol = r.id_rol

    WHERE u.first_name LIKE '%$search%' OR u.last_name LIKE '%$search%'
    WHERE u.first_name LIKE '%$user%'
    ")->getResult();
}

  public function register($user)
  {
    $this->db->table('users')->insert($user);
  }
 
}