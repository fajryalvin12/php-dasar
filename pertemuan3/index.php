<?php 
// Pengulangan
// for 
// - isian for ada 3, yaitu inisialisasi (tentukan nilai awal), kondisi terminasi (memberhentikan pengulangan), increment / decrement (menentukan maju mundurnya looping)
// while
// - harus berikan increment agar tidak terjadi looping forever atau pengulangan terus menerus
// do.. while 
// - ketika kondisinya berada dalam situasi false, maka kode akan dijalankan sekali saja
// foreach : pengulangan khusus array

// for ( $i = 0; $i < 5; $i++ ) {
//     echo "Hello World! <br>";
// }

// $i = 9;
// while($i < 5) {
//     echo "Hello World! <br> ";
//     $i++;
// }

// do {
//     echo "Hello World! <br> ";
//     $i++;
// } while($i < 5)

// normal looping in HTML 

// <?php 
// for($i = 1; $i <= 3; $i++) {
//     echo "<tr>";
//     for ($j = 1 ; $j <= 5; $j++) {
//         echo "<td>$i,$j</td>";
//     }
//     echo "</tr>";
// }
// 

// templating 

/*
<?php for($i = 1; $i <= 3; $i++) :?>
    <tr>
        <?php for($j = 1; $j <= 5; $j++) : ?>
            <td><?= "$i, $j" ?></td>
        <?php endfor ?>
    </tr>
<?php endfor; ?>
 */

// Pengkondisian / Percabangan 

// if else 
// if else if else 
// ternary
// switch

// $x = 20;
// if ($x < 20) {
//     echo "Benar";
// }
// else if ($x == 20) {
//     echo "bingo!";
// }
// else {
//     echo "salah";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table style="border: 1px solid black">
        <?php for($i = 1; $i <= 5; $i++) :?>
            <?php if( $i % 2 == 0) : ?>
                <tr class="warna-baris">
            <?php else :?>
                <tr>
            <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>        
    </table>
</body>
</html>