<?php
require 'functions.php';
$mahasiswa = query("SELEB =FROM Mahasiswa");
?>

<!DOCTYPE html>
<html>
<body>
    <title>Halaman admin<title>
</head>
</body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacingg="0">

<tr>
    <th>No.</th>
    <th>Aksi.</th>
    <th>Gambar.</th>
    <th>NRP.</th>
    <th>Nama.</th>
    <th>Email.</th>
    <th>Jurusan.</th>
   </tr>

   <?php foreach($Mahasiswa as $row ): ?>
   <tr>
         <td><?= $row["id"]; ?></td>
         </td>
              <a href="">ubah</a> |
              <a href="">hapus</a> 
        </td>
        <td><img src="img/<?=$row["gambar"]; ?> " width="50"></td>
        <td><?= $row["npr"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
   </tr>
   <?php endforeach; ?>

   </table>

   </body>
   </html>







