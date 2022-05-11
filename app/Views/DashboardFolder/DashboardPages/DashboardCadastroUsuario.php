<?php 
session_start();
    if(!isset($_SESSION['usuario'])){
      echo "<script> alert('POR FAVOR REALIZAR LOGIN'); window.location.href='../Login/indexlogin'; </script>";
        exit;
    }
?>

<?= $this->extend('DashboardFolder/Tema')?>
<?= $this->section('conteudoPrincipal')?>


<link rel="stylesheet" href="<?php echo base_url('css/ComponentesCadUsu.css') ?>"/>



<div class="main">
      <div class="topbar">
        <div class="toggle" onclick="toggleMenu();" ></div> 
            <div class="search">
              <label>
               <input type="text" placeholder="Search here">
                <i class="fa fa-magnifying-glass"></i>
              </label>
            </div>
              <div class="user">
                <img src="http://localhost/ProjetoPessoal/public/imagens/user.jpg">
             
        </div>
      </div>

        <a href="#" ><button type="submit" class="buttoneditar">Editar Usuario</button> </a>
        <a href="#" ><button type="submit" class="buttonexcluir">Excluir Usuario</button> </a>

        <!----- Botão para acessar o Modal ----->
<a href="#openModal" ><button type="submit" class="button">Cadastrar Usuario</button> </a>
           
        <!----- Modal ----->
  <div id="openModal" class="modalDialog">
    <div>
      <a href="#close" title="Close" class="close">X</a>
      <div class="cad">
        <h2>Cadastro Usuario</h2>
      </div>

      <div class="">
        <form action="" method="">

              <input name="usuario" type="text" class="inputusuario" id="usuario" placeholder="Usuario ID" ><br><br>
              <input  name="senha"type="password" class="inputsenha" id="senha" placeholder="Senha"  ><br><br>
        
              <button type="submit" class="buttoncadastrar">Cadastrar</button>

        </form>
          <!----- Modal ----->

      </div>
    </div>
  </div>
          <!----- Botão para acessar o Modal ----->
        




                <!----- Tabela de Usuarios ----->
              <?php $table = new \CodeIgniter\View\Table(); ?>

              <?php $data = $tabela; ?>


              <?php $template = [
              'table_open' => '<table border="1"  cellspacing="0" class="tabelacor">'
              ]; ?>

              <?php  $table->setHeading(
                                              'id',
                                              'login_usuario',
                                              'login_senha',
                                              'data_criado',
                                              'data_editado',
                                              'data_excluido'
              );

              ?>


              <?php $table ->setTemplate($template); ?>
              <?php echo $table->generate($data); ?>
                <!----- Tabela de Usuarios ----->
 



</div>



<?= $this->endSection()?>