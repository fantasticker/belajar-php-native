<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "php_dasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    $rows = [];
    if (!$result) {
        echo mysqli_error($conn);
        exit;
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }
    return $rows;
}
