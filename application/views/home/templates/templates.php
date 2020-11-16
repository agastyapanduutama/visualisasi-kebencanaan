<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Visualisasi Kebencanaan</title>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://code.highcharts.com/highcharts.src.js"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminu/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminu/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    body {}

    .map-container-2 {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-container-2 iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>

  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body style="font-family: 'Poppins', sans-serif;">

  <!-- Content Header (Page header) -->
  <!-- <div class="content-header"> -->
  <nav class="navbar navbar-dark" style="background-color: #fcc32b">
    <div class="container">
      <span class="logo-lg float-sm-left">
        <a href="<?= base_url('beranda') ?>"><img width="50px" src="<?= base_url() ?>assets/logo/logolipi.png" alt="">
          <b style="font-size: 15px; color: black">Visualisasi Penelitian Kebencanaan LIPI</b></a>
      </span>
      <span class="float-sm-right">
        <a href="<?= base_url('beranda') ?>" class="btn btn-warning" style="font-size: 15px; color: black">Beranda</x`a>
        <a href="<?= base_url('analisis') ?>" class="btn btn-warning" style="font-size: 15px; color: black">Analisi Data</a>
        <a href="<?= base_url('kontak') ?>" class="btn btn-warning" style="font-size: 15px; color: black">Kontak Kami</a>
      </span>
    </div>
  </nav>
  <!-- /.content-header -->

  <?php require 'content.php'; ?>


</body>

</html>
<!-- /.box -->
<script src="<?= base_url() ?>assets/adminu/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/adminu/dist/js/adminlte.min.js"></script>

</body>

</html>