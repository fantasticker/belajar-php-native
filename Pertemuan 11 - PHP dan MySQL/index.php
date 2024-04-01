<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa")

// Query/ambil data
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if (!$result) {
//     echo mysqli_error($conn);
// };

// Fetch data mahasiswa dari $result
// mysqli_fetch_row() -> mengembalikan array numerik
// mysqli_fetch_assoc() -> mengembalikan array asosiatif (paling sering digunakan)
// mysqli_fetch_array() -> mengembalikan array numerik dan asosiatif (data yang disajikan double)
// mysqli_fetch_object() -> jarang dipakai

// $mahasiswa = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ganti</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="images/<?php echo $row["gambar"]; ?>" alt="" width="100px"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>