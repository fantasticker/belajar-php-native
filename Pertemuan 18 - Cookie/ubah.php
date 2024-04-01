<?php

require 'function.php';

session_start();

// kalo superglobal $_SESSION belum di inisiasi, maka arahkan (header) user ke login.php
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

// Cek apakah button sudah diklik atau belum
if (isset($_POST["submit"])) {


    // Cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
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
    <title>Ubah</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP: </label>
                <input id="nrp" type="text" name="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input id="nama" type="text" name="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input id="email" type="text" name="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input id="jurusan" type="text" name="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <img src="images/<?= $mhs["gambar"] ?> " alt="" width="150px"><br>
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