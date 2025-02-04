<?php
require_once 'config.php';

class Database {
    private $db_host = "sql210.infinityfree.com"; // Ganti sesuai dengan hostname di cPanel
    private $db_user = "if0_38224672"; // Ganti dengan username database kamu
    private $db_pass = "5ZELHfaYAIY9"; // Ganti dengan password database kamu
    private $db_name = "if0_38224672_Kantin";
    public $conn;

    public function __construct() {
        // Membuat koneksi ke database
        $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
