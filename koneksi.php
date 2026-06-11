<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "funny_latihan_kelas_kopi";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
 die("Koneksi database gagal: " . mysqli_connect_error());
}
?>