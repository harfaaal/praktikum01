<?php
$nama = 'harfa';
$umur = 19;
$berat = 55;

echo 'nama saya '.$nama;
echo "<br/ >";
echo " <h1 style='color:  blue'>Nama saya $nama, umur saya $umur, berat saya $berat";
echo "<br/ >";

// variable system
// berasal built in php langsung berisi informasi
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo "<br/ >";

// variable konstan
// variable yg tidak bisa diubah nilainya
define('makanan', 'sushi');
echo makanan;





?>