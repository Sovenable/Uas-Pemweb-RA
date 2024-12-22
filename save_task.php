<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $studentName = $_POST['studentName'];
    $subject = $_POST['subject'];
    $taskTitle = $_POST['taskTitle'];
    $deadline = $_POST['deadline'];
    $status = $_POST['status'];

    // Debugging: Tampilkan data yang diterima
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Validasi input
    if (empty($studentName) || empty($subject) || empty($taskTitle) || empty($deadline) || empty($status)) {
        die("Semua field harus diisi!");
    }

    // Koneksi database
    $db = new Database();
    $conn = $db->connect();

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO tugas (student_name, subject, task_title, deadline, status) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $studentName, $subject, $taskTitle, $deadline, $status);

    if ($stmt->execute()) {
        echo "Tugas berhasil disimpan!";
        header("Location: index.php"); // Redirect kembali ke halaman form
    } else {
        die("Gagal menyimpan data: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
