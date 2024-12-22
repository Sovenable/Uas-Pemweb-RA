CREATE DATABASE monitoring_tugas;

USE monitoring_tugas;

CREATE TABLE tugas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    task_title VARCHAR(255) NOT NULL,
    deadline DATE NOT NULL,
    status ENUM('Belum Selesai', 'Selesai') NOT NULL,
    ip_address VARCHAR(50),
    browser TEXT
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);


