<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http:localhost/phpmvc/public/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/bootstrap.css">
    <title>halaman <?= $data['judul'] ?></title>
</head>
<body>
  <header class="navigasi-bar">
<nav class=" navbar navbar-expand-lg navbar-light bg-info shadow" style="">
  <a class="navbar-brand h2 fw-bold disabled" href=" "  ><span style="color:#F2BE22;">W</span>EB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav" >
      <a class="nav-item nav-link text-white active" href="<?=BASE_URL; ?>/home">Home <span class="sr-only">(current)</span></a>
      <!-- <a class="nav-item nav-link text-white" href="<?=BASE_URL; ?>/blog">Kompetensi Keahlian</a> -->

  <div class="dropdown nav-item nav-link text-white">
  <a onclick="myFunction()" class="dropbtn text-white dropdown-toggle">Kompetensi Keahlian</a>
  <div id="myDropdown" class="dropdown-content text-decoration-none">
    <a href="#home" style="text-decoration: none;">Teknik Konstruksi dan Perumahan (TKP)</a>
    <a href="#about" style="text-decoration: none;">Desain Pemodelan dan Informasi Bangunan (DPIB)</a>
    <a href="#contact" style="text-decoration: none;">Teknik Pemanasan,Tata Udara dan Pendinginan (TPTUP)</a>
    <a href="#home" style="text-decoration: none;"> Teknik Pengelasan (TP)</a>
    <a href="#home" style="text-decoration: none;">Rekayasa Perangkat Lunak (RPL)</a>
    <a href="#home" style="text-decoration: none;"> Kuliner</a>
    <a href="#home" style="text-decoration: none;"> Akuntansi</a>
  </div>
</div>

      <a class="nav-item nav-link text-white" href="<?=BASE_URL; ?>/blog">Data Guru</a>
      <a class="nav-item nav-link text-white" href="<?=BASE_URL; ?>/siswa">Data Siswa</a>
      <a class="nav-item nav-link text-white" href="<?=BASE_URL; ?>/user/profile">About</a>
      
    </div>
  </div>
</nav>
</header>
