<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$mahasiswa = [
    ["Vissi", "2010512033", "Sistem Informasi", "varrelvs04@gmail.com"],
    ["Varrel", "2010512033", "Sistem Informasi", "varrelv0406@gmail.com"]
]
?>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama    :   <?php echo $mhs[0]; ?></li>
        <li>NIM     :   <?php echo $mhs[1]; ?></li>
        <li>Jurusan :   <?php echo $mhs[2]; ?></li>
        <li>Email   :   <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>