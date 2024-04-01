<?php
// Date
// l = nama hari, hari ini; d-M-Y = tanggal, bulan(nama), tahun
echo date("l, d-M-Y") . "<br>";

// Time
// UNIX Timestamp / EPOCH Time = Kesepakatan waktu di dalam dunia IT
// Merupakan detik yang berlalu semenjak 1 Januari 1970
echo time() . "<br>";

// Date & Time
// Mengetahui tanggal bulan tahun setelah 365 hari
echo date("d M Y", time()+60*60*24*365)."<br>";

// mktime
// Mengetahui tanggal lahir
echo date("l, d-M-Y", mktime(0,0,0,6,4,2002))."<br>";

// strtotime
// Mencetak waktu dalam detik dimulai dari 1 Januari 1970
echo strtotime("25 aug 2006")."<br>";
echo date("l, d-M-Y", strtotime("25 aug 2006"));
?>