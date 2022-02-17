<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url('css/DashboardCss.css') ?>"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/c5780dc492.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="">
            <span class="icon"><i class="fa-solid fa-desktop"></i></span>
            <span class="title"><h2>Dashboard User<h2></span>
            </a>
          </li>
          <li>
            <a href="#">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <span class="title">Cadastrar Usuario</span>
            </a>
          </li>
          <li>
            <a href="#">
            <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
            <span class="title">Deslogar</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

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
    </div>




  <script>
    function toggleMenu(){
      let toggle = document.querySelector('.toggle');
      let navigation = document.querySelector('.navigation');
      let main = document.querySelector('.main');
      toggle.classList.toggle('active');
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    }
  </script>

  </body>
</html>