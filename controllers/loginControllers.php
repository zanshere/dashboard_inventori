<?php
include '../config/koneksi.php';
session_start();

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

// Validasi input kosong
if (empty($email) || empty($password) || empty($username)) {
    $error_type = "form";
    $error_message = "Pastikan semua form input terisi!";
    exit;
}

// Query cek email
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("i", $email);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

$direct = "../views/dashboard/overview.php";
$success_type = "Login Berhasil";
$success_message = "Hi, Kamu sudah bisa mengakses halaman dashboard";
exit;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        <?php if (isset($success_message)): ?>
        Swal.fire({
            icon: 'success',
            title: '<?= $success_type ?>',
            text: '<?= $success_message ?>',
        }).then(() => {
            window.location.href = '<?= $direct ?>';
        });
        <?php elseif (isset($error_message)): ?>
        Swal.fire({
            icon: 'error',
            title: '<?= $error_type ?>',
            text: '<?= $error_message ?>',
        });
        <?php endif; ?>
    </script>
</body>
</html>