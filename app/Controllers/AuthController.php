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

    $same_DNI = $this->usersModel->where('DNI', $DNI)->first();
    if ($same_DNI) {
      return redirect()->to(base_url() . '/register')->with('errors', 'El DNI ya está registrado');
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
          'user_data' => $user
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

  public function search()
  {
    $search = $this->request->getGet('search');
    $users = $this->usersModel->searchUsers($search);
    return view('search_results', ['users' => $users]);
  }

  public function showUserProfile()
  {
    $user = session()->get('user_data');
    return view('profile', ['user' => $user]);
  }
}