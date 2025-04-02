<?php

require 'functions.php';
if (isset($_POST["login"])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek username didalam database yang sama dengan yang diinput ketika login di form
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    
    // gunakan mysqli_num_rows() untuk menghitung baris yang dikembalikan dari query yang dijalankan. 
    if (mysqli_num_rows($result) === 1) {

        // cek password 
        $row = mysqli_fetch_assoc($result);
        // gunakan password_verify() untuk cek sebuah string apakah sama dengan hash nya 
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if(isset($error)) : ?>
        <p style="color: red;">Username / Password salah</p>
    <?php endif ?>
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
            <button type="submit" name="login">Login!</button>
        </li>
    </ul>
    </form>

</body>
</html>