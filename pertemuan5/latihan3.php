<?php 
//Array Multidimension : array didalam array 
// Array Numeric : array yang index nya adalah angka 

$mahasiswa = [
    ["Fajry Alvin", "20180510420", "Hubungan Internasional", "fajryalvin12@gmail.com"],
    ["John Doe", "20180510421", "Hubungan Internasional", "john@gmail.com"],
    ["20180510422", "Jane Doe", "Hubungan Internasional", "jane@gmail.com"],
]

// Array asosiatif : array yang nilainya adalah string
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

<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0] ?></li>
    <li>NIM : <?= $mhs[1] ?></li>
    <li>Jurusan : <?= $mhs[2] ?></li>
    <li>Email : <?= $mhs[3] ?></li>
</ul>
<?php endforeach ?>
</body>
</html>