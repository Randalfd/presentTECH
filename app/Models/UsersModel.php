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
    'age',
    'DNI',
    'email',
    'password',
    'number_phone',
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

  public function getUsersRol()
  {
    return $this->db->query("
    SELECT u.id_user, u.first_name, u.last_name, u.age, u.DNI, u.email, u.password, u.number_phone, r.rol_name
    FROM users AS u
    INNER JOIN roles AS r
    ON u.id_rol = r.id_rol
    ")->getResult();
  }

  public function searchUsers($first_name,$last_name){
    return $this->db->query("
    SELECT u.id_user, u.first_name, u.last_name, u.age, u.DNI, u.email, u.password, u.number_phone, r.rol_name
    FROM users AS u
    INNER JOIN roles AS r
    ON u.id_rol = r.id_rol
    WHERE u.first_name LIKE '%$first_name%' OR u.last_name LIKE '%$last_name%'
    ")->getResult();

  }

  public function register($user)
  {
    $this->db->table('users')->insert($user);
  }
  public function login($user)
  {
    $user = $this->db->query("SELECT * FROM users WHERE email = '$user[email]' AND password = '$user[password]'")->getResult();
    if($user){
      return $user;
    }else{
      return false;
    }
  }
}