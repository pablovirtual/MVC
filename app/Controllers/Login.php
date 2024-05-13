<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;

class Login extends BaseController
{
    private $usuario;

    public function index()
    {
        return view('Login/index');
    }

    public function agregarUsuario(){
        $usuario = $this->request->getPost('emailUsuario');
        $email = $this->request->getPost('email');
        $clave = $this->request->getPost('clave');

        $this->usuario = new Usuario();
        $this->usuario->agregarUsuario($usuario, $email, $clave);

        return redirect()->to(base_url('escritorio'));
    }

    public function validarIngreso()
    {
        $emailUsuario = $this->request->getPost('emailUsuario');
        if (filter_var($emailUsuario, FILTER_VALIDATE_EMAIL)) {
            $email = filter_var($emailUsuario, FILTER_SANITIZE_EMAIL);
            $this->usuario = new Usuario();
            $resultadoUsuario = $this->usuario->buscarUsuarioPorEmail($email);
        } else {
            $usuario = preg_replace('/[^a-zA-Z0-9.-]/', '', $emailUsuario);
            $this->usuario = new Usuario();
            $resultadoUsuario = $this->usuario->buscarUsuarioPorUsuario($usuario);
        }

        if ($resultadoUsuario) {
            $claveDB = $resultadoUsuario->clave;
            $clave = $this->request->getPost('clave');
            if (password_verify($clave, $claveDB)) {
                $data = ['usuario' => $resultadoUsuario->usuario, 'email' => $resultadoUsuario->email, 'clave' => $resultadoUsuario->clave];
                session()->set($data);
                return redirect()->to(base_url() . 'escritorio');
            } else {
                $data = ['tipo' => 'danger', 'mensaje' => 'La clave es incorrecta'];
                return view('Login/index', $data);
            }
        } else {
            $data = ['tipo' => 'danger', 'mensaje' => 'Usuario incorrecto o inactivo'];
            return view('Login/index', $data);
        }
    }

    public function cerrarSesion()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
