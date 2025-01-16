<?php
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form dan lakukan sanitasi
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $role = $_POST['role'];

    // Validasi input
    if (empty($username) || empty($password) || empty($email) || empty($name) || empty($role)) {
        $error_type = "form";
        $error_message = "Pastikan tidak ada yang kosong!";
    } elseif (strlen($username) > 10) {
        $error_type = "username";
        $error_message = "Username tidak boleh lebih dari 10 karakter!";
    } elseif (strlen($password) < 8) {
        $error_type = "password";
        $error_message = "Minimal password adalah 8 karakter!";
    } else {
        // Mengenkripsi password akun user
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Memasukan data user ke database
        $stmt = $conn->prepare("INSERT INTO users (username, password, email, name, role) VALUES (?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Error preparing statement" . $conn->connect_error);
        }
        // Mengikat parameter
        $stmt->bind_param("sssss", $username, $hashed_password, $email, $name, $role);
        // Menjalakan statement
        if ($stmt->execute()) {
            $succes = "Registrasi Akun";
            $success_message = "Akun anda berhasil diregistrasi, silahkan login";
        } else {
            $error_type = "Error";
            $error_message = "Error : " . $stmt->error();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<form method="POST" class="p-4 shadow-sm rounded bg-light">
    <!-- Username -->
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>

    <!-- Email -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>

    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
    </div>

    <!-- Role -->
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select class="form-select" id="role" name="role" required>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
        </select>
    </div>

    <!-- Submit Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>

    <!-- SweetAlert Logic -->
    <script>
        <?php if (isset($success)): ?>
        Swal.fire({
            icon: 'success',
            title: '<?= $success ?>',
            text: '<?= $success_message ?>',
        }).then(() => {
            window.location.href = 'login.php';
        });
        <?php elseif (isset($error_type)): ?>
        Swal.fire({
            icon: 'error',
            title: '<?= $error_type ?>',
            text: '<?= $error_message ?>',
        });
        <?php endif; ?>
    </script>
    <script src="../../assets/JS/index.js"></script>
</form>
</body>
</html>
