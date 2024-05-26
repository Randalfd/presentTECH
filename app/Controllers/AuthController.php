<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class AuthController extends BaseController
{

  private $usersModel;
  public function __construct()
  {
    $this->usersModel = new UsersModel();
  }

  public function register()
  {
    $user = [
      'first_name' => $this->request->getPost('first_name'),
      'last_name' => $this->request->getPost('last_name'),
      'DNI' => $this->request->getPost('DNI'),
      'email' => $this->request->getPost('email'),
      'gender' => $this->request->getPost('gender'),
      'password' => $this->request->getPost('password'),
      'repeat_password' => $this->request->getPost('repeat_password')
    ];

    $hashed_password = password_hash('password', PASSWORD_BCRYPT);
    $same_email = $this->usersModel->where('email', $user['email'])->first();
    if ($same_email) {
      return redirect()->to(base_url() . '/register')->with('errors', 'El email ya está registrado');
    }
    if ($user['password'] == $user['repeat_password']) {
      $data = [
        'first_name' => $user['first_name'],
        'last_name' => $user['last_name'],
        'email' => $user['email'],
        'DNI' => $user['DNI'],
        'password' => $hashed_password
      ];

      $this->usersModel->register($data);
      return redirect()->to(base_url( '/login'))->with('message', 'Usuario registrado correctamente');
    } else {
      return redirect()->to(base_url('/register')  )->with('errors', 'Las contraseñas no coinciden');
    }
  }

  public function login()
  {
   
    $email = $this->request->getPOST('email');
    $password = strval($this->request->getPost('password'));

    $valid_user = $this->usersModel->where('email', $email)->first();

    if ($valid_user && password_verify($password, $valid_user['password'])) {
      $session = session();
      $session->set('id', $valid_user['id_user']);
      $session->set('first_name', $valid_user['first_name']);
      $session->set('last_name', $valid_user['last_name']);
      $session->set('email', $valid_user['email']);
      $session->set('DNI', $valid_user['DNI']);
      $session->set('gender', $valid_user['gender']);
      $session;
      return;
    } else {
      echo "Password hash in DB: " . $valid_user['password'] . "<br>";
      echo "Password provided: " . $password . "<br>";
      echo "Password verify result: " . (password_verify($password, $valid_user['password']) ? 'true' : 'false') . "<br>";
    return;
    }

  }
}