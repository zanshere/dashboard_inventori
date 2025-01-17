<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger Menu - Full Right Sidebar</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100" x-data="{ isOpen: false }">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold text-gray-800">MyApp</div>

            <!-- Hamburger Menu -->
            <button @click="isOpen = !isOpen" class="text-gray-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <div
        class="fixed inset-y-0 right-0 bg-white w-full max-w-sm shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-20"
        :class="{ 'translate-x-0': isOpen, 'translate-x-full': !isOpen }">
        <div class="p-4 flex justify-between items-center border-b">
            <h2 class="text-lg font-semibold text-gray-800">Menu</h2>
            <button @click="isOpen = false" class="text-gray-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="p-4 space-y-4">
            <li><a href="#home" class="block text-gray-600 hover:text-gray-800">Home</a></li>
            <li><a href="#about" class="block text-gray-600 hover:text-gray-800">About</a></li>
            <li><a href="#services" class="block text-gray-600 hover:text-gray-800">Services</a></li>
            <li><a href="#contact" class="block text-gray-600 hover:text-gray-800">Contact</a></li>
        </ul>
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

</body>
</html>
