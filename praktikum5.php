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
            <h1>Form Pasien</h1>
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
require_once "class_accountBank.php";

$b1 = new akun('K001','Abel', number_format(7000000,0,".","."));
$b2 = new akun('K002','Abimala', number_format(6450000,0,".","."));
$b3 = new akun('K003','Cello',number_format(10500000,0,".","."));
$bank = [$b1,$b2,$b3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table class="table">
        <h1 class="text-center mt-3">Bank Jago</h1>
        <div class="container-fluid mb-3">
            <div class="row">
                <div class="col-md-5">
                <blockquote class="blockquote">
                <p>Aktivitas :</p>
                </blockquote>
                <p class="lead">Abel menabung Rp. 2.000.000 <br>
                Cello menarik uang Rp. 3.500.000</p>
                </div>
            </div>
        </div>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">No Akun</th>
            <th scope="col">Pemilik</th>
            <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($bank as $bk){
            ?>
                <tr>
                    <td scope="row"><?=$nomor?></td>
                    <td><?=$bk->no_akun?></td>
                    <td><?=$bk->pemilik?></td>
                    <td><?=$bk->saldo?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
class Buah{
    //buat property
    public $name;
    protected $color;
    private $berat;

    //buat method untuk mencetak si color dan berat.
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_berat($b){
        return $this->berat = $b;
    }
}
//cetak object
$mangga = new Buah();
echo $mangga->name = 'Mangga';
echo"<br>";
echo $mangga->set_color('hijau');
echo"<br>";
echo $mangga->set_berat(20).'kg';
?>
<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250 . " ML";
    public $namaMinuman;

    public function set_volume($v){
        return $this->volume = $v;
    }
    public function set_hargaSegelas($hs){
        return $this->hargaSegelas = $hs;
    }
    public function pengurangan($vol){
        echo "Hasil volume bernilai" ." ". $this->volume . " ML";
    }
}

$air = new Dispenser();
echo $air -> namaMinuman = "<p style='text-align:center;'>  AQUA<p/>";
echo "<hr>";
echo $air -> set_volume("Volumenya adalah 1000 ML");
echo "<br>";
echo $air -> set_hargaSegelas("Harga segelasnya adalah Rp.". number_format("3000",0,".","."));
echo "<br>";
echo "Hana membeli air 1 gelas yang bervolume ". Dispenser::volumeGelas;
echo "<br>";
$air->pengurangan(1000);
?>
<?php
class Fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna){
        $this->name = $name;
        $this->warna = $warna;
    }
    public function intro(){
        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{ //extends adalah keyword untuk inherite atau memasukkan class turunan dari class seblumnya.
    public function pesan(){
        echo "Aku adalah semangka atau mangga?";
    }
}
$buah = new Strawberry('semangka','merah');
$buah->pesan();
$buah->intro();
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