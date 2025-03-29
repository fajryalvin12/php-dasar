<?php
// 1. koneksi ke database 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// 2. buat function khusus untuk query

// 3. kembalikan array associative dari function yang dibuat

// - gunakan global conn agar variael conn dapat dipakai di function query atau function lain yang beda scope

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
?>