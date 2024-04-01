<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
</head>
<body>
    <?php
    // Array Biasa
    $mahasiswa = [
        ["Vissi", "2010512033", "Sistem Informasi", "2020"],
        ["Varrel", "2010512034", "Teknik Informatika", "2020"]
    ];

    // Array Asosiatif (Key-nya adalah string yang kita buat sendiri)
    $mahasiswa1 = [ //Ini array numerik
        [ //ini array asosiatif
            "Nama" => "Vissi",
            "NIM" => "2010512033",
            "Jurusan" => "Sistem Informasi",
            "Angkatan" => "2020",
            "Gambar" => "pcit9.PNG"  
        ],
        [ //ini array asosiatif
            "Nama" => "Kwaci",
            "NIM" => "2010512034",
            "Jurusan" => "Sistem Informasi",
            "Angkatan" => "2020",
            "Gambar" => "pict10.PNG" 
        ],
        [ //ini array asosiatif
            "Nama" => "Badmvth",
            "NIM" => "2010512033",
            "Jurusan" => "Sistem Informasi",
            "Angkatan" => "2020",
            "Gambar" => "pict11.PNG" 
        ]
    ];
    ?>

    <h1>DAFTAR MAHASISWA</h1>
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama    :<?php echo $mhs[0]; ?></li>
        <li>NIM     :<?php echo $mhs[1]; ?></li>
        <li>Jurusan :<?php echo $mhs[2]; ?></li>
        <li>Angkatan:<?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

    <br>
    <h1>DAFTAR MAHASISWA (DENGAN ARRAY ASOSIATIF)</h1>
    <?php foreach($mahasiswa1 as $mhs1): ?>
    <ul>
        <li>Nama    :<?php echo $mhs1["Nama"]; ?></li>
        <li>NIM     :<?php echo $mhs1["NIM"]; ?></li>
        <li>Jurusan :<?php echo $mhs1["Jurusan"]; ?></li>
        <li>Angkatan:<?php echo $mhs1["Angkatan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>