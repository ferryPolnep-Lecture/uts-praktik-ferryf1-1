<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts5d";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi berhasil <br><br>";
?>
