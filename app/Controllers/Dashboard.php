<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function indexdashboard()
	{

		echo view ('DashboardFolder/DashboardPages/DashboardHeader');

	}


public function CadastroUsuario()
	{

		$model = new \App\Models\ModelLogin();

		$data["tabela"] = $model->findAll();
	

		

		echo view('DashboardFolder/DashboardPages/DashboardCadastroUsuario', $data);

		
	}

	

}

?>
