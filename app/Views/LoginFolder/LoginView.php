
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('/css/LoginCss.css') ?>"/> 
</head>

<body>

<header>
		

	<div class="box_login">
	<form action="./VerificaLogin" method="POST">

		<div class="imagemlogin">
		<img  src="http://localhost/ProjetoPessoal/public/imagens/barra_login1.png">
		</div>

	

            <input name="usuario" type="text" class="inputusuario" id="usuario" placeholder="Usuario ID" ><br><br>
            <input  name="senha"type="password" class="inputsenha" id="senha" placeholder="Senha"  ><br><br>
			
            <button type="submit" class="buttonlogin button0">LOGIN</button>

          </form>

	</div>

</header>

</body>

</html>


 
<?php
/**
 helper('form'); 

echo form_open('http://localhost/login/public/index.php/Logins/VerificaLogin');

echo '<div align = "center">';

echo form_label('Faça seu Login', 'label_login');

echo '<div align = "center">';

echo form_input('usuario', '');

echo '<br>';

echo form_password('senha', '');

echo '<br>';

echo form_submit('btnEnvia', 'Logar', array('class'=>'btn btn-primary'));

echo "</div>";

echo form_close();

*/
?>