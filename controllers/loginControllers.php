<?php
include '../config/koneksi.php';
session_start();

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi input kosong
if (empty($email) || empty($password)) {
    $error_type = "form";
    $error_message = "Pastikan email dan password terisi!";
    exit;
}

// Query cek email
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}
$stmt->bind_param("s", $email); // Perbaikan: gunakan "s" untuk string
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Set session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect ke halaman dashboard
        $direct = "../views/dashboard/overview.php";
        $success_type = "Login Berhasil";
        $success_message = "Hi, Kamu sudah bisa mengakses halaman dashboard";

        // Redirect menggunakan header
        header("Location: $direct");
        exit;
    } else {
        $error_type = "Login Gagal";
        $error_message = "Password salah!";
    }
} else {
    $error_type = "Login Gagal";
    $error_message = "Email tidak ditemukan!";
}

// Jika ada error, tampilkan pesan error
if (isset($error_type)) {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: '$error_type',
            text: '$error_message',
        });
    </script>";
}
