<?php
// koneksi ke DB
require "koneksi.php";

// ambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$makul = $_POST['makul'];
$khs = $_POST['khs'];



// kueri INSERT data
$sql = "INSERT INTO krs (name, nim, kelas, makul, khs) VALUES ('$name', '$nim', '$kelas', '$makul', '$khs')";

if ($conn->query($sql) === TRUE) {
    // echo "KRS berhasil ditambahkan<br>";
    // echo "<a href='tampilKRS.php'>Lihat KRS</a>";
    header('Location: tampilKRS.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// tutup koneksi
$conn->close();
?>