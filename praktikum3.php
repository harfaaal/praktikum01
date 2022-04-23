<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 3</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Aulia Harfa Lutfisa</a></li>
              <li class="breadcrumb-item"><a href="#">0110121297</a></li>
              <li class="breadcrumb-item active">Semester2</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Aulia Harfa Lutfisa</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <a class="navbar-brand ml-3" href="">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
        <li class="nav-item">
            <a class="nav-link" href="">Document</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=""></a>
        </li>   
        <li class="nav-item">
            <a class="nav-link" href="">About</a>
        </li>
        </ul>
        <form class="d-flex">
        <input class="form-control mr-2 border border-info" type="search" placeholder="Search" aria-label="Search">
        <a class="nav-link text-white" href="" style="text-decoration: none;">Login</a>
        </form>
    </div>
    </nav>
  
        
</body>
</html>
              <?php
  $mahasiswa = [
    ["id" => 1,"nama" => "Abel", "nim" => "0110220160", "uts" => 89, "uas" => 85, "tugas" => 100],
    ["id" => 2,"nama" => "Hilmy", "nim" => "0110220161", "uts" => 88, "uas" => 90, "tugas" => 95],
    ["id" => 3,"nama" => "Maraka", "nim" => "0110220162", "uts" => 86, "uas" => 86, "tugas" => 95],
    ["id" => 4,"nama" => "Marcello", "nim" => "0110220163", "uts" => 84, "uas" => 90, "tugas" => 100],
    ["id" => 5,"nama" => "Azzam", "nim" => "0110220164", "uts" => 92, "uas" => 95, "tugas" => 95],
    ["id" => 6,"nama" => "Bagas", "nim" => "0110220165", "uts" => 90, "uas" => 89, "tugas" => 95],
    ["id" => 7,"nama" => "Kala", "nim" => "0110220166", "uts" => 93, "uas" => 88, "tugas" => 90],
    ["id" => 8,"nama" => "Juan", "nim" => "0110220167", "uts" => 85, "uas" => 93, "tugas" => 92],
    ["id" => 9,"nama" => "Haikal", "nim" => "0110220168", "uts" => 84, "uas" => 95, "tugas" => 88],
    ["id" => 10,"nama" => "Abimala", "nim" => "0110220169", "uts" => 85, "uas" => 80, "tugas" => 90],
  ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Daftar Nilai</title>

  <?php
    include 'fungsi.php'
  ?>
</head>
<body>
  <table class="table table-striped table-primary">
    <thead>
      <th>ID</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>UTS</th>
      <th>UAS</th>
      <th>Tugas</th>
    </thead>

    <tbody>
      <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $mhs["id"] ?></td>
          <td><?= $mhs["nama"] ?></td>
          <td><?= $mhs["nim"] ?></td>
          <td><?= $mhs["uts"] ?></td>
          <td><?= $mhs["uas"] ?></td>
          <td><?= $mhs["tugas"] ?></td>
        </tr>
      <?php endforeach;  ?>
      
    </tbody>
  </table>
</body>
<?php
    include 'bawah.php'
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
      <!-- Main Footer -->
      <footer class="bg-success text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-white">Document</h5>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-white">Contact Us</h5>
            </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-white">About Us</h5>
            </div>
        </div>
            <hr class="mb-4">
        </div>
        <div style="text-align: center;">
          <p class="fs-6">2021 Company, Inc. All rights reserved.</p>
        </div>
      </footer>
</body>
</html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php 
include_once 'footer.php';
?>