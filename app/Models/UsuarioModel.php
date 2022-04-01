<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model {

    protected $table = 'usuario';
    protected $primaryKey = 'email';
    protected $allowedFields = ['nome', 'email', 'senha'];

    public function getTodos($email = null){
        if ($email == null){
            return $this->findAll();
        }
        return $this->asArray()->where(['email' => $email])->first();
    }

    public function inserir($data)
    {            
        return $this->insert($data);
    }

    public function detalhar($id){
        // return $this->
    }

}
