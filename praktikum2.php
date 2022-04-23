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
            <h1>Praktikum 2</h1>
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
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div style="border:1px solid; margin: 10px;">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-9 pt-2">
                    <h3>BELANJA ONLINE</h3>
                    <br>
                    <form method = "POST" action = "form belanja.php">
                            <div class="form-group row pt-2">
                                <label for="cs" class="col-3 col-form-label">Customer</label> 
                                <div class="col-7">
                                <input id="cs" name="cs" placeholder="Nama Customer" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Pilih Produk</label> 
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="Jumlah" class="col-3 col-form-label">Jumlah</label> 
                                <div class="col-4">
                                <input id="Jumlah" name="Jumlah" type="text" class="form-control">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="offset-4 col-3">
                                <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </div>

                            <?php
                                // Variable user
                                $nama="Putri Fredilina";
                                $produk= "MESIN CUCI";
                                $jumlah= 2;
                                $total = "Rp.7.600.000";
                
                                echo 'Nama Costumer : '.$nama;
                                echo "<br />";
                                echo 'Produk Pilihan : '.$produk;
                                echo "<br />";
                                echo 'Jumlah Beli : '.$jumlah;
                                echo "<br />";
                                echo 'Total Belanja : '.$total;
 
                            ?>
                    </form>
                </div>
                    <div class="col-md-3">
                        <ul class="list-group" id="list">
                            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                            <li class="list-group-item">TV : 4.200.000</li>
                            <li class="list-group-item">Kulkas : 3.100.000</li>
                            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                            <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Latihan Form Processing</title>
</head>
<body>
        <div class="m-5 border border-success p-4 rounded">
            <form method="GET" autocomplete="off" action="form.php">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label" >Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </div>
                        </div> 
                        <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" required="required" class="custom-select">
                        <option value="">Pilih Matkul</option>
                        <option value="basis_data">Basis Data</option>
                        <option value="php">PHP</option>
                        <option value="ddp">DDP</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text1" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text2" name="nilai_uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text3" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="m-5 border border-success p-4 rounded">
                <!-- Cetak php -->
                <?php
                    if(isset($_GET['submit'])){
                        $nama = $_GET['nama'];
                        $matkul = $_GET['matkul'];
                        $nilai_uts = $_GET['nilai_uts'];
                        $nilai_uas = $_GET['nilai_uas'];
                        $nilai_tugas = $_GET['nilai_tugas'];
                        $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

                        // if($matkul == 'basis_data'){
                        //     $nama_matkul = 'Basis Data';
                        // }elseif($matkul == 'php'){
                        //     $nama_matkul = 'PHP';
                        // }elseif($matkul == 'ddp'){
                        //     $nama_matkul = 'DDP';
                        // }
                          
                        switch($matkul){
                            case "basis_data": $nama_matkul = "Basis Data"; break;
                            case "php": $nama_matkul = "PHP"; break;
                            case "ddp": $nama_matkul = "Dasar Dasar Pemerograman"; break;
                            default: "";
                        }

                    }?>
                
                <?php if(isset($_GET['submit'])){?>
                    <p>Nama Lengkap : <?= $nama?> </p>
                    <p>Mata Kuliah : <?= $nama_matkul?></p> 
                    <p>Nilai UTS : <?= $nilai_uts?></p> 
                    <p>Nilai UAS : <?= $nilai_uas?></p>
                    <p>Nilai Tugas/Praktikum : <?= $nilai_tugas?></p> 
                    <p>Nilai Akhir : <?= $nilai_akhir?></p> 
                <?php }else{
                    echo '<div class="alert alert-primary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai , Grade dan Predikat </div>';
                } ?>
                
        </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="m-5 border border-success p-4 rounded">
        <form method="GET" action="form.php" autocomplete="off">
            <div class="form-group row">
                <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                    </div>
                    </div> 
                    <input id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" required="required" class="custom-select">
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="ddp">Dasar - Dasar Pemrograman</option>
                    <option value="basis_data">Basis Data</option>
                    <option value="backend">Back End</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Proses</button>
                </div>
            </div>
        </form>
    </div>

    <div class="m-5 border border-primary p-4 rounded">
        <?php
            if(isset($_GET['submit'])){
                //variable
                $nama = $_GET['nama'];
                $matkul = $_GET['matkul'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $nilai_tugas = $_GET['nilai_tugas'];

                //if else nama matkul
                // if($matkul == 'ddp'){
                //     $nama_matkul = "Dasar Dasar Pemrograman";
                // }elseif($matkul == 'basis_data'){
                //     $nama_matkul = "Basis Data";
                // }elseif($matkul == 'backend'){
                //     $nama_matkul = "Back End";
                // }

                //swicth case nama matkul
                switch($matkul){
                    case 'ddp': $nama_matkul = 'Dasar Dasar Pemerograman'; break;
                    case 'basis_data': $nama_matkul = 'Basis Data'; break;
                    case 'backend': $nama_matkul = 'Back End'; break;
                    default: $nama_matkul = '';
                }

                echo 'Nama : '.$nama.'<br>';
                echo 'Matkul : '.$nama_matkul.'<br>';
                echo 'Nilai UTS : '.$nilai_uts.'<br>';
                echo 'Nilai UAS : '.$nilai_uas.'<br>';
                echo 'Nilai Tugas : '.$nilai_tugas.'<br>';
            }
        ?>
    </div>
</body>
</html>
<h1>If Else</h1>
                <?php
                $teman = "Mawar";
                if ($teman == "Mawar") {
                    echo "Mawar Adalah Teman Saya";
                }else{
                    echo "Mawar Bukan teman saya";
                }
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