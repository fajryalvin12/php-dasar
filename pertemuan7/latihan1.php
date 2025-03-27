<?php 
// Variabel scope / lingkup variabel
// $x = 10; // variabel lokal untuk file latihan1.php

// function tampilX() {
    // global $x; // variabel global 
    // $x = 20; // variabel lokal yang ada di function saja
    // echo $x; // lingkup variabel berada di scope yang berbeda, hanya berlaku didalam function tampilX saja
// }

// tampilX();  

// Variabel superglobal
// definisi : variabel dari PHP yang dapat digunakan dimanapun dan kapanpun di halaman PHP, tipenya adalah array associative 
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV

// echo($_SERVER["MYSQL_HOME"])

// $_GET
// definisi dari GET (request method): metode pengiriman data melalui URL dan data tersebut bisa ditangkap oleh superglobal $_GET 


$mahasiswa = [
    [
        "nama" => "Fajry", 
        "nim" => "12345678",
        "email" => "fajry@mail.com",
        "jurusan" => "HI",
        "gambar" => "antony.jpg"
    ],
    [
        "nama" => "Alvin", 
        "nim" => "12345679",
        "email" => "alvin@mail.com",
        "jurusan" => "IP",
        "gambar" => "onana.jpg"
    ],
];

// var_dump($_GET)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul></ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&nim=<?= $mhs["nim"] ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"] ?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"] ?></a>
        </li>
    <?php endforeach; ?>
</body>
</html>