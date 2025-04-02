<?php 

// memanggil file function.php
require 'functions.php'; 
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    // dapet data dari apapun yang diketikan dari input pencarian
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">tambah data mahasiswa</a>
<br></br>

<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian!">
    <button type="submit" name="cari">Cari!</button>
</form>

<br></br>

<table>

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    
    <?php $id = 1 ?>
    <?php foreach ($mahasiswa as $row) : ?>
    <tr>
        <td><?= $id ?></td>
            <td>
            <a href="ubah.php?id=<?= $row["id"] ?>">ubah </a>
            <a href="hapus.php?id=<?= $row["id"] ?>" onclick="
            return confirm('yakin?')">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" alt=""></td>
        <td><?= $row["nrp"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>
    <?php $id++; ?>
    <?php endforeach ?>

</table>

</body>
</html>