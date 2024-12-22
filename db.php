<?php
class Database {
    private $host = "localhost";
    private $user = "root"; // Default XAMPP username
    private $pass = ""; // Default XAMPP password
    private $dbname = "monitoring_tugas"; // Nama database Anda

    public function connect() {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>
