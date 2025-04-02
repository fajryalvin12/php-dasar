<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form 
    // gunakan htmlspecialchars() agar tidak menampilkan atau menjalankan elemen html secara langsung

    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);     
    
    // query insert data
    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah ($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);     
    
    // query insert data
    $query = "UPDATE mahasiswa SET 
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id    
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari ($keyword) {
    // buat query atau command untuk filter data berdasarkan keyword yang dimasukkan dalam parameter
    // gunakan LIKE agar lebih fleksibel dalam melakukan pencarian dan modular (%) sebagai wildcard 
    $query = "SELECT * FROM mahasiswa
                WHERE 
            nama LIKE '%$keyword%' OR 
            nrp LIKE '%$keyword%' OR 
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
        ";
    // return berupa array associative dan dimasukkan kedalam $mahasiswa di index
    return query($query);
}

?>