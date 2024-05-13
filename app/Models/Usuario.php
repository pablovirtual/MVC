<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'usuario', 'clave'];

    public function agregarUsuario($usuario, $email, $clave)
    {
        $data = [
            'usuario' => $usuario,
            'email' => $email,
            'clave' => $clave
        ];

        return $this->insert($data);
    }

    public function buscarUsuarioPorEmail($email)
    {
        $builder = $this->db->table($this->table)->where('email', $email);
        $resultado = $builder->get();
        return $resultado->getRow(); // Devuelve un solo resultado
    }

    public function buscarUsuarioPorUsuario($usuario)
    {
        $builder = $this->db->table($this->table)->where('usuario', $usuario)->where('estado', 'A');
        $resultado = $builder->get();
        return $resultado->getRow(); // Devuelve un solo resultado
    }
}
