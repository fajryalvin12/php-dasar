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

    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // jalankan fungsi upload gambar 
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload () {

    // ambil data dari array mutidimensi dari superglobal files dari form tambah data, dapet dari atribut name 
    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    // lakukan beberapa pengecekan 
    // cek apakah tidak ada gambar yang diupload 
    if ($error === 4) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar 
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'jfif'];
    // gunakan explode untuk memecah string menjadi array, lalu ambil indeks terakhir menggunakan function end dan ubah keseluruhan nama file menggunakan function strtolower  
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // cek ekstensi gambar yang diupload ada di array khusus ekstensi tidak menggunakan in_array
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('unggah file yang sesuai');
        </script>";
        return false;
    }

    // cek jika yang diupload terlalu besar 
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');
        </script>";
        return false;  
    }

    // lolos pengecekan, gambar siap diupload 
    // generate nama gambar baru 

    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    // kembalikan nama file agar value dari $gambar di file tambah dapat berubah menjadi nama file yang diupload
    return $namaFileBaru;
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
    $gambarLama = htmlspecialchars($data["gambarLama"]); 

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();     
    }
    
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
    $query = "SELECT * FROM mahasiswa
                WHERE 
            nama LIKE '%$keyword%' OR 
            nrp LIKE '%$keyword%' OR 
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
        ";

    return query($query);
}

function registrasi ($data) {
    global $conn;

    // gunakan function strtolower() untuk mengubah input menjadi huruf kecil dan stripslashes() untuk membersihkan input dari karakter tertentu
    $username = strtolower(stripslashes($data["username"]));
    // gunakan mysqli_real_escape_string() untuk memungkinkan user memasukkan password dengan tanda kutip di DB
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum 
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar')
        </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai')
        </script>";
        return false;
    }

    // enkripsi password, gunakan password_hash()
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke dalam database 
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");


    // kembalikan angka 1 apabila data berhasil masuk ke db
    return mysqli_affected_rows($conn);
}

?>