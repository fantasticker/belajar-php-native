<?php
require 'function.php';

// Cek apakah button sudah diklik atau belum
if (isset($_POST["submit"])) {


    // Cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <!-- 2. Menambahkan encoding type untuk memproses input type="file" -->
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP: </label>
                <input id="nrp" type="text" name="nrp" required>
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input id="nama" type="text" name="nama">
            </li>
            <li>
                <label for="email">Email: </label>
                <input id="email" type="text" name="email">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input id="jurusan" type="text" name="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <!-- 1. Mengubah input type menjadi "file" agar bisa menginputkan file ke form -->
                <input id="gambar" type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Kembali ke Home</a>
</body>

</html>