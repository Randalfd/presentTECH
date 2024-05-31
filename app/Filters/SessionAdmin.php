<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SessionAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verifica el rol del usuario
        if(session("user_data")["id_rol"] != '1'){
            // Si el usuario no tiene el rol 1, destruye la sesión y redirige a la página de inicio de sesión
            session()->destroy();
            return redirect()->to(base_url('loginicio'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}