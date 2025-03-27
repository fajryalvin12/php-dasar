<?php 
// Array 
// sebuah variabel yang bisa menampung banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value 
// key nya adalah index, dimulai dari 0

// membuat array 
// cara lama 
// ket. : nilai pada array adalah elemen
$hari = array("Senin", "Selasa", "Rabu");
// cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "String", true];

// Menampilkan array 
// gunakan var_dump() atau print_r()
// print_r() tidak menampilkan tipe data
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array 
// echo $arr[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array 
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari)

?>