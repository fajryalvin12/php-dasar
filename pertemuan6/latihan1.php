<?php 
// array 
// membuat array
// tiap array memiliki index di tiap valuenya

// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "tulisan", true];

//menampilkan array
// versi debugging 
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr[0];

// Array multidimension : array didalam array 
// cara aksesnya :
// $angka = [[1,2,3],[4,5,6],[7,8,9]];
// echo $angka[1][1];

// output : 5

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: burlywood;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    
    <?php 
    $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>

<?php foreach($angka as $a) : ?>
    <?php foreach($a as $b) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div> 
<?php endforeach; ?>
</body>
</html>