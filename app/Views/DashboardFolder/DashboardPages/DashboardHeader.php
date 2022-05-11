<?php 
session_start();
    if(!isset($_SESSION['usuario'])){
      echo "<script> alert('POR FAVOR REALIZAR LOGIN'); window.location.href='../Login/indexlogin'; </script>";
        exit;
    }
?>

<?= $this->extend('DashboardFolder/Tema')?>
<?=  $this->section('conteudoPrincipal') ?>


<?= $this->endSection()?>