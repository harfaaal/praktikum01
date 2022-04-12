<?php
  $mahasiswa = [
    ["id" => 1,"nama" => "Mujib", "nim" => "0110220178", "uts" => 89, "uas" => 85, "tugas" => 100],
    ["id" => 2,"nama" => "Reza", "nim" => "0110220179", "uts" => 88, "uas" => 90, "tugas" => 95],
    ["id" => 3,"nama" => "Rido", "nim" => "0110220180", "uts" => 86, "uas" => 86, "tugas" => 95],
    ["id" => 4,"nama" => "Ilham", "nim" => "0110220181", "uts" => 84, "uas" => 90, "tugas" => 100],
    ["id" => 5,"nama" => "Rahena", "nim" => "0110220182", "uts" => 92, "uas" => 95, "tugas" => 95],
    ["id" => 6,"nama" => "Mutiara", "nim" => "0110220183", "uts" => 90, "uas" => 89, "tugas" => 95],
    ["id" => 7,"nama" => "Aisah", "nim" => "0110220184", "uts" => 93, "uas" => 88, "tugas" => 90],
    ["id" => 8,"nama" => "Kamil", "nim" => "0110220185", "uts" => 85, "uas" => 93, "tugas" => 92],
    ["id" => 9,"nama" => "Risma", "nim" => "0110220186", "uts" => 84, "uas" => 95, "tugas" => 88],
    ["id" => 10,"nama" => "Shefty", "nim" => "0110220187", "uts" => 85, "uas" => 80, "tugas" => 90],
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