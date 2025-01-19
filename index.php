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
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black min-h-screen" x-data="{ isOpen: false, currentPage: 'home' }">

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
<div x-show="isOpen" x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="transform translate-x-full opacity-0" 
    x-transition:enter-end="transform translate-x-0 opacity-100" 
    x-transition:leave="transition ease-in-out duration-300" 
    x-transition:leave-start="transform translate-x-0 opacity-100" 
    x-transition:leave-end="transform translate-x-full opacity-0"
    class="fixed inset-y-0 right-0 w-64 bg-white h-full p-6 space-y-6 z-20">
    <!-- Sidebar Content -->
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-semibold text-gray-900">Menu</h2>
        <button @click="isOpen = false" class="text-gray-900 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <ul class="space-y-4">
        <li><a href="#" @click.prevent="currentPage = 'home'; isOpen = false" class="text-gray-900 hover:text-gray-600">Home</a></li>
        <li><a href="#" @click.prevent="currentPage = 'about'; isOpen = false" class="text-gray-900 hover:text-gray-600">About</a></li>
        <li><a href="#" @click.prevent="currentPage = 'products'; isOpen = false" class="text-gray-900 hover:text-gray-600">Products</a></li>
        <li><a href="#" @click.prevent="currentPage = 'inventory'; isOpen = false" class="text-gray-900 hover:text-gray-600">Inventory</a></li>
        <li><a href="#" @click.prevent="currentPage = 'orders'; isOpen = false" class="text-gray-900 hover:text-gray-600">Orders</a></li>
        <li><a href="#" @click.prevent="currentPage = 'customers'; isOpen = false" class="text-gray-900 hover:text-gray-600">Customers</a></li>
        <li><a href="#" @click.prevent="currentPage = 'contact'; isOpen = false" class="text-gray-900 hover:text-gray-600">Contact Us</a></li>
        <li><a href="#" @click.prevent="currentPage = 'faq'; isOpen = false" class="text-gray-900 hover:text-gray-600">FAQs</a></li>
    </ul>

    <div class="mt-8 space-y-4">
        <a href="views/auth/login.php" class="block text-center text-blue-500 border border-blue-500 hover:bg-blue-500 hover:text-white py-2 rounded-md transition duration-300">Login</a>
        <a href="views/auth/register.php" class="block text-center text-green-500 border border-green-500 hover:bg-green-500 hover:text-white py-2 rounded-md transition duration-300">Register</a>
    </div>
</div>

<!-- Content -->
<!-- Home -->
<div class="container mx-auto px-4 py-16" x-show="currentPage === 'home'">
    <!-- Welcome Section -->
    <div class="text-center text-white mb-12">
        <h1 class="text-4xl font-semibold mb-6">Welcome to Retail Inventory</h1>
        <p class="text-lg leading-relaxed max-w-3xl mx-auto">Your inventory management system for all your retail needs. Simplify your stock management and keep track of your products efficiently.</p>
    </div>

    <!-- Fitur Utama -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Product Management</h3>
            <p>Manage and track your products effortlessly with an intuitive interface.</p>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Inventory Tracking</h3>
            <p>Keep your stock levels up to date with real-time updates.</p>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Order Management</h3>
            <p>View and manage customer orders in real-time with ease.</p>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="bg-gray-800 text-white py-16 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center mb-6">What Our Users Say</h2>
        <p class="text-lg text-center mb-4">"Retail Inventory has made managing my retail store so much easier! I love how simple and efficient it is!"</p>
        <p class="text-center">- Happy Customer</p>
    </section>
</div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 text-center">
        <p>&copy; 2025 Retail Inventory. All rights reserved.</p>
    </footer>
</div>

<!-- About -->
<div class="container mx-auto px-4 py-16" x-show="currentPage === 'about'">
    <div class="text-center text-white">
        <h1 class="text-3xl font-semibold mb-4">About Us</h1>
        <p>Retail Inventory is designed to help you keep track of your retail items, manage stock, and enhance your business operations.</p>
    </div>
</div>

<!-- Products -->
<div class="container mx-auto px-4 py-16" x-show="currentPage === 'products'">
    <div class="text-center text-white mb-12">
        <h1 class="text-4xl font-semibold mb-6">Our Products</h1>
        <p class="text-lg leading-relaxed max-w-3xl mx-auto">Explore our range of high-quality retail products. Manage and organize your inventory effortlessly.</p>
    </div>

    <!-- Product List -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Product 1</h3>
            <p class="text-gray-300">A detailed description of Product 1.</p>
            <div class="mt-4 flex justify-between items-center">
                <span class="text-lg font-semibold">$100.00</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">View Details</button>
            </div>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Product 2</h3>
            <p class="text-gray-300">A detailed description of Product 2.</p>
            <div class="mt-4 flex justify-between items-center">
                <span class="text-lg font-semibold">$150.00</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">View Details</button>
            </div>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Product 3</h3>
            <p class="text-gray-300">A detailed description of Product 3.</p>
            <div class="mt-4 flex justify-between items-center">
                <span class="text-lg font-semibold">$200.00</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">View Details</button>
            </div>
        </div>
    </section>

    <!-- Add New Product Button -->
    <div class="flex justify-center mt-8">
        <button class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 transition duration-300">Add New Product</button>
    </div>
</div>

<!-- Inventory -->
<div class="container mx-auto px-4 py-16" x-show="currentPage === 'inventory'">
    <div class="text-center text-white mb-12">
        <h1 class="text-4xl font-semibold mb-6">Inventory Management</h1>
        <p class="text-lg leading-relaxed max-w-3xl mx-auto">Easily manage your inventory and keep track of your stock levels in real time.</p>
    </div>

    <!-- Inventory List -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Product 1</h3>
            <p class="text-gray-300">Stock: 50</p>
            <div class="mt-4 flex justify-between items-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Update Stock</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300">Remove Product</button>
            </div>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Product 2</h3>
            <p class="text-gray-300">Stock: 30</p>
            <div class="mt-4 flex justify-between items-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Update Stock</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300">Remove Product</button>
            </div>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Product 3</h3>
            <p class="text-gray-300">Stock: 100</p>
            <div class="mt-4 flex justify-between items-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Update Stock</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300">Remove Product</button>
            </div>
        </div>
    </section>

    <!-- Add New Product Button -->
    <div class="flex justify-center mt-8">
        <button class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 transition duration-300">Add New Product</button>
    </div>
</div>

<!-- Orders -->
<div class="container mx-auto px-4 py-16" x-show="currentPage === 'orders'">
    <div class="text-center text-white mb-12">
        <h1 class="text-4xl font-semibold mb-6">Order Management</h1>
        <p class="text-lg leading-relaxed max-w-3xl mx-auto">Manage and track customer orders from placement to completion.</p>
    </div>

    <!-- Order List -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Order #1</h3>
            <p class="text-gray-300">Customer: John Doe</p>
            <p class="text-gray-300">Status: Pending</p>
            <div class="mt-4 flex justify-between items-center">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition duration-300">Update Status</button>
            </div>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Order #2</h3>
            <p class="text-gray-300">Customer: Jane Smith</p>
            <p class="text-gray-300">Status: Completed</p>
            <div class="mt-4 flex justify-between items-center">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition duration-300">Update Status</button>
            </div>
        </div>
        <div class="bg-gray-700 text-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Order #3</h3>
            <p class="text-gray-300">Customer: Michael Lee</p>
            <p class="text-gray-300">Status: Shipped</p>
            <div class="mt-4 flex justify-between items-center">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition duration-300">Update Status</button>
            </div>
        </div>
    </section>

    <!-- Add New Order Button -->
    <div class="flex justify-center mt-8">
        <button class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 transition duration-300">Add New Order</button>
    </div>
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


<!-- Overlay for Sidebar -->
<div class="fixed inset-0 bg-black bg-opacity-50 z-10" x-show="isOpen" @click="isOpen = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

</body>
</html>
