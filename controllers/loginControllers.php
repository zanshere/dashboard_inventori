<?php
session_start();
include '../config/koneksi.php';

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Inisialisasi variabel pesan
$success = '';
$success_message = '';
$error_type = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Ambil data pengguna berdasarkan username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Periksa password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // Tentukan redirect URL berdasarkan role
            $redirect_url = '';
            switch ($user['role']) {
                case 'admin':
                    $redirect_url = 'admin_dashboard.php';
                    break;
                case 'staff':
                    $redirect_url = 'staff_dashboard.php';
                    break;
                case 'costumer':
                    $redirect_url = 'costumer_dashboard.php';
                    break;
                default:
                    $error_type = 'Role Tidak Valid';
                    $error_message = 'Role pengguna tidak dikenali.';
                    break;
            }

            if (!$error_type) {
                // Set pesan sukses
                $success = 'Login Berhasil';
                $success_message = 'Selamat datang, ' . htmlspecialchars($user['username']) . '!';
            }
        } else {
            // Set pesan error jika password salah
            $error_type = 'Login Gagal';
            $error_message = 'Password yang Anda masukkan salah.';
        }
    } else {
        // Set pesan error jika username tidak ditemukan
        $error_type = 'Login Gagal';
        $error_message = 'Username tidak ditemukan.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>
<body>
    <script>
        <?php if (isset($success)): ?>
        Swal.fire({
            icon: 'success',
            title: '<?= $success ?>',
            text: '<?= $success_message ?>',
        }).then(() => {
            window.location.href = '<?= $redirect_url ?>';
        });
        <?php elseif (isset($error_type)): ?>
        Swal.fire({
            icon: 'error',
            title: '<?= $error_type ?>',
            text: '<?= $error_message ?>',
        }).then(() => {
            window.location.href ='../views/auth/login.php';
        });
        <?php endif; ?>
    </script>
</body>
</html>
