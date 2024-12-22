<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemantauan Tugas Mahasiswa</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="logout.php" class="logout-link">Logout</a>

    <h1>Sistem Pemantauan Tugas Mahasiswa</h1>

    <!-- Form untuk menambah tugas -->
    <form id="taskForm" method="POST" action="save_task.php">
        <label for="studentName">Nama Mahasiswa:</label>
        <input type="text" id="studentName" name="studentName" required><br><br>

        <label for="subject">Mata Kuliah:</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="taskTitle">Judul Tugas:</label>
        <input type="text" id="taskTitle" name="taskTitle" required><br><br>

        <label for="deadline">Deadline:</label>
        <input type="date" id="deadline" name="deadline" required><br><br>

        <label for="status">Status Tugas:</label>
        <select id="status" name="status" required>
            <option value="Belum Selesai">Belum Selesai</option>
            <option value="Selesai">Selesai</option>
        </select><br><br>

        <button type="submit">Tambah Tugas</button>
    </form>

    <!-- Tabel untuk menampilkan daftar tugas -->
    <h2>Daftar Tugas</h2>
    <table id="taskTable" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Judul Tugas</th>
                <th>Deadline</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "db.php"; // Include koneksi database
            $db = new Database();
            $conn = $db->connect();

            // Query untuk mengambil data dari tabel 'tugas'
            $result = $conn->query("SELECT * FROM tugas");
            $no = 1;

            // Tampilkan data ke dalam tabel
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['student_name']}</td>
                            <td>{$row['subject']}</td>
                            <td>{$row['task_title']}</td>
                            <td>{$row['deadline']}</td>
                            <td>{$row['status']}</td>
                          </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='6'>Belum ada data tugas.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
