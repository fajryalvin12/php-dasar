<?php

    require 'functions.php';

    // cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["register"])) {
        // cek apakah data yang diambil dari form sudah lebih dari 0 atau terisi
        if (registrasi($_POST) > 0) {
            echo "<script>
                alert('user baru ditambahkan')
            </script>";
        } else {
            // tampilkan pesan error 
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
<h1>Halaman Registrasi</h1>

<form action="" method="post">

    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Register!</button>
        </li>
    </ul>

</form>

</body>
</html>