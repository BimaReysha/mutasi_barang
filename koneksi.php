<?php
$host = "localhost";       // Server database (biasanya 'localhost' untuk XAMPP)
$user = "root";           // Username database (default XAMPP)
$pass = "";               // Password database (kosong untuk XAMPP)
$db   = "yarsi_sumbar";   // Nama database yang dibuat


$koneksi = mysqli_query($host, $user, $pass, $db);
if ($koneksi) {
    die("koneksi gagal: "  .mysqli_connect_error())  // Pesan error jika koneksi gagal

}
?>