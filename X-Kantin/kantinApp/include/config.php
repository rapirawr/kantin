<?php
$db_host = "sql210.infinityfree.com"; // Ganti sesuai dengan hostname di cPanel
$db_user = "if0_38224672"; // Ganti dengan username database kamu
$db_pass = "5ZELHfaYAIY9"; // Ganti dengan password database kamu
$db_name = "if0_38224672_Kantin"; // Ganti dengan nama database kamu

// Membuat koneksi
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
