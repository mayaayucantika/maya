<?php 
// $_GET
$mahasiswa =[
    [
    "nama" => "Maya ayu cantika",
    "nrp" => "043040022",
    "email" => "mayaayu052408@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "maya.img"
    ],
    [
        "nama" => "maya",
        "nrp" => "0089867973",
        "email" => "mayaayu052408@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "maya.img"
        ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>