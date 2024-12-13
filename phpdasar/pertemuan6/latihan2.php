<?php
//$mahasiswa = [
   // ["maya", 0089867973", "rekayasa perangkat lunak", "mayaayu052408@gmail.com"],
   // ["maya", 0089867973", "rekayasa perangkat lunak", "mayaayu052408@gmail.com"]
//];

//array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa =[
    [
    "nama" => "maya",
    "nrp" => "0089867973",
    "email" => "mayaayu052408@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "kucing.jpg.jpeg"
],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) :?>
    <ul>
        <li>
            <img src="img/kucing.jpg.jpeg">
        <li>nama:<? $mhs ["nama"] ;?></li>
        <li>NRP:<? $mhs ["nrp"] ;?></li>
        <li>jurusan:<? $mhs ["juransan"] ;?></li>
        <li>email:<? $mhs ["email"] ;?></li>
</ul>
<?php endforeach; ?>

</body>
</html>