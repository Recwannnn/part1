<?php
$host = "localhost";
$user = "root";
$pass = ""; // ubah jika ada password MySQL
$db   = "db_siswa";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
