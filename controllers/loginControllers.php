<?php
include '../config/koneksi.php';
session_start();

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

// Validasi input kosong
if (empty($email) || empty($password) || empty($username)) {
    echo '<script>alert("Semua kolom harus diisi!");</script>';
    header('Refresh: 0; url=../views/auth/login.php');
    exit;
}

// Query cek email
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("i", $email);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

header('Refresh: 0; url=../dashboard/index.php');
exit;
    