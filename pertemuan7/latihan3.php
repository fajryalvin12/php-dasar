<!-- 
$_POST adalah superglobal dari request method POST, dimana POST sendiri digunakan untuk mengambil data dari form yang ada di file HTML

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php if(isset($_POST["submit"])) : ?>
    <h1>Selamat datang, <?php echo $_POST["nama"] ?> !</h1>
<?php endif; ?>

    <form method="post">
        Masukkan Nama : 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>