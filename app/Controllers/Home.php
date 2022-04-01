<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function mostraFormulario()
    {
        return view('form');
    }
    public function enviaFormulario()
    {
        $usuarios_model = new UsuarioModel();

        $data = array(
            'email' => $this->request->getVar('email'),
            'senha' => md5($this->request->getVar('senha'))
        );

        $usuarios_model->inserir($data);
        return redirect()->to('/form');
    }
}
