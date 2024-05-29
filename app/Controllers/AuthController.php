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
    $first_name = $this->request->getPost('first_name');
    $last_name = $this->request->getPost('last_name');
    $DNI = $this->request->getPost('DNI');
    $email = $this->request->getPost('email');
    $gender = $this->request->getPost('gender');
    $password = $this->request->getPost('password');
    $repeat_password = $this->request->getPost('repeat_password');

    $same_email = $this->usersModel->where('email', $email)->first();
    if ($same_email) {
      return redirect()->to(base_url() . '/register')->with('errors', 'El email ya está registrado');
    }

    if ($password != $repeat_password) {
      return redirect()->to(base_url('/register'))->with('errors', 'Las contraseñas no coinciden');
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $data = [
      'first_name' => $first_name,
      'last_name' => $last_name,
      'email' => $email,
      'DNI' => $DNI,
      'gender' => $gender,
      'password' => $hashed_password
    ];

    $this->usersModel->register($data);
    return redirect()->to(base_url('/login'))->with('message', 'Usuario registrado correctamente');
  }

  public function login()
  {
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $user = $this->usersModel->where('email', $email)->first();

    if ($user) {
      $hashed_password = $user['password'];
      if (password_verify($password, $hashed_password)) {
        session()->set([
          'user_id' => $user['id_user'],
          'user_email' => $user['email'],
          'user_name' => $user['first_name'] . ' ' . $user['last_name'],
          'is_logged_in' => true
        ]);

        return redirect()->to(base_url('/loginhome'));
      } else {
        return redirect()->to(base_url('/login'))->with('errors', 'Contraseña incorrecta');
      }
    } else {
      return redirect()->to(base_url('/login'))->with('errors', 'El correo electrónico no está registrado');
    }
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->to(base_url('home'));
  }
}