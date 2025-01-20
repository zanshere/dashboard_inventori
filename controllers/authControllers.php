<?php
require '../config/koneksi.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $error_type = "Login Error";
            $error_message = "Username dan Password tidak boleh kosong!";
        } else {
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
            if ($stmt === false) {
                die("Error preparing statement: " . $conn->error);
            }
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];

                    $success = "Login Sukses";
                    $success_message = "Selamat datang, " . $user['username'] . "!";
                } else {
                    $error_type = "Login Gagal";
                    $error_message = "Password salah!";
                }
            } else {
                $error_type = "Login Gagal";
                $error_message = "Username tidak ditemukan!";
            }
        }
    }
}

?>

<script>
    <?php if (isset($success)): ?>
    Swal.fire({
        icon: 'success',
        title: '<?=$success?>',
        text: '<?=$success_message?>',
    }).then(() => {
        window.location.href = '../views/dashboard.php';
    });
    <?php elseif (isset($error_type)): ?>
    Swal.fire({
        icon: 'error',
        title: '<?=$error_type?>',
        text: '<?=$error_message?>',
    });
    <?php endif; ?>
</script>
