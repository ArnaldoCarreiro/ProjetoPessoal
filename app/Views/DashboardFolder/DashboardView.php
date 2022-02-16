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
        <div class="toggle"></div>
          <div class="search">
            <label>
              <input type="text" placeholder="Search here">
            </label>
          </div>
          <div class="user">
              <img src="http://localhost/login/imagens/user.jpg">
            </div>
      </div>
    </div>



        
  </body>
</html>