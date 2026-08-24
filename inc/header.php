<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>CRUD com Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/all.min.css">
    <style>
        body {
            padding-top: 75px;
            padding-bottom: 20px;
        }
        .btn-light {
          background-color: #cccccc;
          border-color: #cccccc;
          color: #FFFFFF;
        }
        .btn-light:hover {
          background-color: #999999;
          border-color: #cccccc;
          color: #FFFFFF;
        }

    </style>
</head>
<body class="container">

    <nav class="navbar navbar-expand-lg  bg-body-tertiary fixed-top " data-bs-theme="dark">
  <div class="container-fluid">
    <i class="fa-solid fa-house-chimney" style="color: white;"></i>
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcrud" aria-controls="navbarcrud" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarcrud">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user-group" style="color: white;"></i>CLientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo BASEURL;?>customers"><i class="fa-solid fa-user-group" style="color: white;"></i>Gerenciar CLientes</a></li>
            <li><a class="dropdown-item" href="<?php echo BASEURL;?>customers/add.php"><i class="fa-solid fa-user-plus" style="color: white;"></i>Novo Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>

    <main class="container"></main>