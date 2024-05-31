<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SessionUser implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verifica si no hay una sesión activa
        if (session('user_data') === null) {
          return redirect()->to(base_url('login'));
      }
        // Verifica el rol del usuario
        if(session('user_data')['id_rol'] != '1' && session('user_data')['id_rol'] != '2'){
            // Si el usuario no tiene rol, redirige a la página de inicio de sesión
            //session()->destroy();
            return redirect()->to(base_url('loginhome'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}