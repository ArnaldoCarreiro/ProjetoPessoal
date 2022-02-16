<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function indexlogin()
	{

		echo view ('LoginFolder/LoginView');

	}

//============================ Verificação do Login =================================//

	public function VerificaLogin()
	{

		$model = new \App\Models\ModelLogin();

        $usuario = $this->request->getPost('usuario');
        $senha = $this->request->getPost('senha');


        $verificauser = $model->where('login_usuario', $usuario)->first();
        $verificasenha = $model->where('login_senha', $senha)->first();




        if (is_null($verificauser) || is_null($verificasenha))  
        {
		echo "<script> alert('ERRO: USUARIO INEXISTENTE'); window.location.href='../Login/indexlogin'; </script>";
        } 
        else {
        session_start();

        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;


        return redirect()->to(base_url() . '/admin/adminindex');

        }

 
        echo "<BR>";
        echo "<BR>";



		

	}


}




?>
