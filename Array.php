<?php
// Membuat array cara 1:
$hari = array("Senin", "Selasa", "Rabu");

// Membuat array cara 2:
$bulan = ["Januari", "Februari", "Maret"];
$arr = ["Vissi", 4, 6, 2002, true];

// Menampilkan array beserta tipe datanya (Versi Debugging)
// var_dump(), print_r()
var_dump($bulan);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan isi indeks array
echo $arr[0];
echo "<br>";

// Menampilkan isi array dengan foreach
foreach ($arr as $a) {
    echo $a;
}

// Menampilkan isi array (User)
for ($i = 0; $i < count($bulan); $i++) :
    echo $bulan[$i] . " ";
endfor;

// Menyisipkan nilai di akhir array
$bulan[] = "April";

// Array 2 dimensi
$mahasiswa = [
    ["Vissi", "2010512033", "Sistem Informasi", "varrelvs04@gmail.com"],
    ["Varrel", "2010512033", "Sistem Informasi", "varrelv0406@gmail.com"]
];
