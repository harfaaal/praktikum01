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
            <h1>form pasien</h1>
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
                
              <?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="content-wrapper">
<form action="halamanBMI.php" method="GET">
<div class="container">
<h1 class="text-center mb-5">Form Pasien</h1>
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="berat" name="berat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <input id="umur" name="umur" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Pria"> 
        <label for="jk_0" class="custom-control-label">Pria</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Wanita"> 
        <label for="jk_1" class="custom-control-label">Wanita</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="submit" type="submit" class="btn btn-primary"></input>
    </div>
  </div>
</form>
</div>
</div>
</form>
<hr>
<?php require_once "classBMI.php";
if ($_GET) {
  $bmi = new bmiPasien;
  $bmi ->nama = $_GET["nama"];
  $bmi ->berat = $_GET["berat"];
  $bmi ->tinggi = $_GET["tinggi"];
  $bmi ->umur = $_GET["umur"];
  $bmi ->jeniskelamin = $_GET["jk"];
  $pasien4 = ['nama' => $bmi->nama, 'kelamin' => $bmi->jeniskelamin, 'umur' => $bmi->umur, 'berat' =>$bmi->berat, 'tinggi' => $bmi->tinggi];
  array_push($ar_pasien,$pasien4);
} 
?>
<div class="container">
<div class="content-wrapper">
  <h2 class="text-center mb-5">Data BMI Pasien</h2>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Gender</th>
        <th scope="col">Umur</th>
        <th scope="col">Berat</th>
        <th scope="col">Tinggi</th>
        <th scope="col">BMI</th>
        <th scope="col">Hasil</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      foreach ($ar_pasien as $pasien){
        echo '<tr><td>' . $nomor . '</td>';
        echo '<td>' .$pasien['nama'] . '</td>';
        echo '<td>' .$pasien['kelamin'] . '</td>';
        echo '<td>' .$pasien['umur'] . '</td>';
        echo '<td>' .$pasien['berat'] . '</td>';
        echo '<td>' .$pasien['tinggi'] . '</td>';
        $BMI = $pasien["berat"] / (($pasien["tinggi"] / 100 ) ** 2);
        echo '<td>' . number_format($BMI, 1). '</td>';
        $status = new bmiPasien();
        echo $status->statusBMI($BMI);
        echo '</tr>';
        $nomor++;
      }
      ?>
    </tbody>
  </table>
</div>
</div>
</hr>
</body>
</html>
<?php
?>
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