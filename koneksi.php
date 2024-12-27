<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdailyjournal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// echo "Koneksi Ber-Hasil";

?>