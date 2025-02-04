<?php
// Contoh pengaturan koneksi database
require_once 'config.php';

class User {
    private $conn;
    private $table_name = 'user';

    public $id;
    public $username;
    public $password;
    public $role;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Fungsi untuk memperbarui last_login tanpa menggunakan NOW() atau datetime
    public function updateLastLogin($username) {
        // Ambil waktu saat ini dari PHP
        $current_time = date('Y-m-d H:i:s'); // Format tanggal dan waktu sesuai kebutuhan

        // Update kolom last_login dengan waktu yang diperoleh
        $query = "UPDATE " . $this->table_name . " SET last_login = ? WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $current_time, $username); // Bind parameter waktu dan username
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
