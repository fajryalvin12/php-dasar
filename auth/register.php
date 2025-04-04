<?php
    // connect ke db terlebih dahulu
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // template pesan kosong, nanti bisa ditimpa
    $message = "";

    // cek tombol sudah dipencet atau belum 
        if (isset($_POST["register"])) {

            // ambil data dari form
            $username = strtolower(trim(htmlspecialchars($_POST["username"])));
            $password = $_POST["password"];
            $confirm = $_POST["password2"];

            // cek form sudah terisi atau belum 
            if (empty($username) || empty($password) || empty($confirm)) {
                $message = "Semua field harus diisi";
            } else if ($password !== $confirm) {
                // cek konfirmasi password sesuai dengan password yang diinput atau tidak 
                $message = "sesuaikan password terlebih dahulu";
            } else {
            // cek apakah username sudah pernah dibuat atau belum 
            $sql_check = "SELECT * FROM user WHERE username = ?";
            $stmt_check = $conn->prepare($sql_check);
            $stmt_check->bind_param("s", $username);
            $stmt_check->execute();
            $stmt_check->store_result();

            if ($stmt_check->num_rows() > 0) {
                $message = "Username sudah terdaftar";
            } else {
            // hash password dengan password_hash()
            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
            
            // init prepared statement
            $sql = "INSERT INTO user (username, password) VALUES(?, ?)";
            $stmt = $conn->prepare($sql);
            // siapkan data binding dengan bind_param(), masuk ke db
            $stmt->bind_param("ss", $username, $hashed_pass);

            // execute prepared statement yang sudah dibuat
            if ($stmt->execute()) {
                $message = "Registrasi berhasil";
            } else {
                $message = "Error" . $stmt->error;
            }
            $stmt->close();
        }
        $stmt_check->close();            
    }
    // tutup koneksi conn dan stmt 
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar</title>
    <style>
        label {
            display: block;
        }
        p {
            color: red;
            font-weight: bold;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <h1>Registrasi User</h1>

    <?php if (!empty($message)) : ?>
       <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>


    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <label for="password2">Confirm Password</label>
                <input type="password" id="password2" name="password2">
            </li>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>
    </form>
</body>
</html>