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
    $user = 
    [ 
      'email' =>$email = $this->request->getPOST('email'),
      'password' => $password = $this->request->getPOST('password')
    ];

    $hashed_password = password_hash('password', PASSWORD_BCRYPT);
    $valid_email = $this->usersModel->where('email', $user['email'])->first();
    $user_password = $this->usersModel->getUsersPassword($valid_email->email);
    if ($valid_email && password_verify($user_password[0], $hashed_password))
    {
    return redirect()->to(base_url('/'))->with('message', 'Bienvenido');
    } else {
      return redirect()->to(base_url('/login'))->with('errors', 'Usuario o contraseña incorrectos');
    } 
  }
}