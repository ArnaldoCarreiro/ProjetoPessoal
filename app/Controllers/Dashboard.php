<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function indexdashboard()
	{

		echo view ('DashboardFolder/DashboardHeader');

	}


public function CadastroUsuario()
	{
		echo view ('DashboardFolder/DashboardPages/DashboardCadastroUsuario');
		

	}

	

}

?>
