<?php 
// User-define function 
// fungsi yang dibuat sendiri, custom function 

// sebuah function biasanya mengembalikan nilai, sehingga menggunakan return 
// parameter untuk passing data ketika function digunakan

// argumen harus diisikan sesuai dengan yang ada di parameter, namun bisa diakali dengan cara memberikan parameter default pada function
function greet ($time = "Datang", $name = "Admin"){
    return "Selamat $time, $name!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= greet("Pagi", "Fajry"); ?></h1>
</body>
</html>