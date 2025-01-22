    <?php
    session_start();
    include '../config/koneksi.php';

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $conn->real_escape_string($_POST['username']);
        $password = $_POST['password'];
        $email = $_POST['email'];

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

                // Redirect berdasarkan role
                switch ($user['role']) {
                    case 'admin':
                        header("Location: //admin_dashboard//.php");
                        break;
                    case 'staff':
                        header("Location: //staff_dashboard//.php");
                        break;
                    case 'viewer':
                        header("Location: //costumer_dashboard//.php");
                        break;
                    default:
                        echo "Role tidak valid!";
                }
                exit;
            } else {
                echo "Password salah!";
            }
        } else {
            echo "Username tidak ditemukan!";
        }
    }
