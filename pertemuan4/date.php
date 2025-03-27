<?php 
// Function 
// A. Build in function 
// https://www.php.net/manual/en/book.classobj.php (manual dari build in function PHP)

// 1. Date / Time => berkaitan dengan waktu 
// time(), date(), mktime(), strtotime()

// argumen pada date() digunakan untuk memanggil tanggal dengan format tertentu
// menggunakan argumen "l" menampilkan hari saja, "d" untuk tanggal, "m" untuk bulan dalam angka, "M" untuk bulan dalam bentuk kata
// format hari ini =>  "l, d-M-Y"
// echo date("l, d-M-Y");

// time(), outputnya adalah UNIX Timestamp, detik yang sudah berlalu sejak 1 Januari 1970
// digunakan untuk memberikan tenggat waktu pada fitur diskon (contoh), mengetahui umur seseorang dari tanggal lahir  
// echo time()

// echo date("l", time() - 60 * 60 * 24 * 100)

// mktime(), berfungsi untuk membuat sendiri detik yang dibutuhkan
// mktime(0,0,0,0,0,0) isian timestamp
// jam, menit, detik, bulan, tanggal, tahun

// echo date("l", mktime(0,0,0,3,12,2000))

// echo date("l", strtotime("12 mar 2000"))

// 2. String 
// strlen() untuk menghitung length pada string 
// strcmp() untuk menggabungkan 2 buah string 
// explode() memecah string menjadi array
// htmlspecialchars()

// 3. Utility
// var_dump() untuk mencetak isi dari variabel, array, object
// isset() cek sebuah variabel sudah pernah dibuat atau belum, output boolean
// empty() cek sebuah variabel kosong atau tidak, ada value atau tidak 
// die() memberhentikan program yang sudah dibuat
// sleep() memberhentikan sementara program yang dibuat

?>