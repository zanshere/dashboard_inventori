<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail Inventory</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/CSS/index.css">
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black min-h-screen" x-data="{ isOpen: false }">

<!-- Navbar -->
<nav class="bg-white bg-opacity-30 backdrop-blur-md shadow-md fixed w-full z-10">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold text-gray-100">Retail Inventory</div>

        <!-- Hamburger Menu -->
        <button @click="isOpen = !isOpen" class="text-gray-100 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>

<!-- Sidebar -->
<div
    class="fixed inset-y-0 right-0 bg-white bg-opacity-30 backdrop-blur-md w-full max-w-sm shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-20"
    :class="{ 'translate-x-0': isOpen, 'translate-x-full': !isOpen }">
    <div class="p-4 flex justify-between items-center border-b">
        <h2 class="text-lg font-semibold text-gray-100">Menu</h2>
        <button @click="isOpen = false" class="text-gray-100 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <ul class="p-4 space-y-4">
        <li><a href="#home" class="block text-gray-100 hover:text-gray-300">Home</a></li>
        <li><a href="#about" class="block text-gray-100 hover:text-gray-300">About</a></li>
    </ul>
    <!-- Login and Register Buttons -->
    <div class="p-4 space-y-4">
        <a href="views/auth/login.php" class="block text-center text-white bg-blue-500 hover:bg-blue-600 py-2 rounded-md">Login</a>
        <a href="views/auth/register.php" class="block text-center text-white bg-green-500 hover:bg-green-600 py-2 rounded-md">Register</a>
    </div>
</div>

<!-- Overlay -->
<div 
    class="fixed inset-0 bg-black bg-opacity-50 z-10 transition-opacity duration-300"
    x-show="isOpen"
    @click="isOpen = false"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">
</div>

<section id="welcome" class="h-screen bg-cover bg-center animate-fade-in" style="background-image: url('https://source.unsplash.com/1600x900/?welcome');">

    <div class="h-full bg-gray-900 bg-opacity-50 flex items-center justify-center">
        <div class="text-center fade-in">
            <h2 class="text-5xl font-extrabold mb-6 text-white animate-fade-in">Welcome to Our Retail Inventory</h2>
            <p class="text-xl text-white animate-fade-in">We are delighted to have you here. Explore our wide range of products.</p>


            <a href="#gallery" class="mt-8 inline-block px-6 py-3 bg-yellow-500 text-gray-900 rounded-full text-lg font-semibold hover:bg-yellow-400 smooth-scroll transform transition-transform duration-300 hover:scale-105">Explore Now</a>

        </div>
    </div>
</section>


</body>
</html>
