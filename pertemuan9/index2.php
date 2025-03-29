<?php 
// PHP & MySQL 

// Cara menghubungkan / connect : 
// ekstensi MYSQL : driver atau ekstensi (fungsi) pada PHP yang digunakan untuk memanipulasi mySQL  
// ekstensi MySQLi : ekstensi MySQL yang sudah diimprove atau diperbaiki
// PDO (PHP Data Object) : driver untuk terhubung dengan banyak database (misal mau ubah datbase dari MySQL ke postgres)

// 1. koneksi ke database 
// urutan parameter : nama host, username mysql, password mysql, nama database  

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// 2. ambil data dari tabel mahasiswa / query data mahasiswa
// parameter : string koneksi ke database (simpan dalam variabel), query / nama tabel (tulis query huruf kapital, nama tabel huruf kecil)

// return 2 hal, jika berhasil akan menjalankan query dan memberikan nilai true. jika gagal maka query tidak akan dijalankan dan kembalikan nilai false 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// 3. ambil data (fetch) mahasiswa dari object result 
// mysqli_fetch_row() // mengembalikan array numerik, bisa tembak salah satu data dengan cara var_dump($mhs[1])
// mysqli_fetch_assoc() // mengembalikan array associative, bisa tembak salah satu data dengan cara var_dump($mhs["nama"])
// mysqli_fetch_array() // mengembalikan array numerik dan associative
// mysqli_fetch_object() //mengembalikan object

// 4. gunakan looping while supaya datanya dapat ditampilkan semua, tidak hanya 1 data saja

// while ( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs["gambar"]);
// }

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
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $id ?></td>
            <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" alt=""></td>
        <td><?= $row["nrp"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>
    <?php $id++; ?>
    <?php endwhile ?>

</table>

</body>
</html>