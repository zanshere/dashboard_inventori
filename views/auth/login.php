<?php 
require '../../config/koneksi.php';
require '../../controllers/authControllers.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
        }
         /* Custom fade-in animation */
         .fade-in {
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md fade-in">
        <div class="bg-white shadow-xl rounded-lg p-8 border border-gray-300">
            <!-- Logo or Icon (Optional) -->
            <div class="flex justify-center mb-4">
                <div class="bg-indigo-500 text-white p-4 rounded-full shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 1.104-.897 2-2 2s-2-.896-2-2m6 0c0 1.104.897 2 2 2s2-.896 2-2m-7 4c0 2.21-2.015 4-4.5 4S3 17.21 3 15V5c0-2.21 2.015-4 4.5-4S12 2.79 12 5v4z" />
                    </svg>
                </div>
            </div>

            <!-- Title -->
            <h5 class="mb-6 text-center text-2xl font-bold text-gray-800">Hello There!</h5>

            <!-- Form -->
            <form action="../../controllers/loginControllers.php" method="POST">
                <input type="hidden" name="action" value="login">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-bold text-gray-700">Username</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-indigo-500 focus:border-indigo-500" name="username" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold text-gray-700">Email Address</label>
                    <input type="email" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-indigo-500 focus:border-indigo-500" name="email" placeholder="name@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
                    <input type="password" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-indigo-500 focus:border-indigo-500" name="password" required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-sm font-bold text-gray-700">Role</label>
                    <select name="role" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="" disabled selected>Select a role</option>
                        <option value="admin">Admin</option>
                        <option value="costumer">Costumer</option>
                        <option value="staff">Staff</option>
                    </select>
                </div>
                <div class="flex justify-between items-center mb-6">
                    <p class="text-sm text-gray-600">
                        Belum punya akun? <a href="register.php" class="text-indigo-500 hover:underline font-semibold">Register</a>
                    </p>
                </div>
                <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
                    Confirm
                </button>
            </form>
        </div>
    </div>

    <!-- SweetAlert -->
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
