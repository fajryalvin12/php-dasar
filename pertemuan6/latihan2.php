<?php 
// $mahasiswa = [
//     ["Fajry", "12341234", "fajry@mail.com", "HI"],
//     ["Alvin", "12341235", "alvin@mail.com", "HI"],
// ]

// Array Associative : variabel yang berisikan banyak nilai, namun key nya dibuat sendiri 
// contoh array associative 
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

// echo $mahasiswa[0]["email"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NIM : <?= $mhs["nim"] ?> </li>
            <li>Email : <?= $mhs["email"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>