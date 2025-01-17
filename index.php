<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/7c1699d806.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/CSS/index.css">
</head>
<body class="bg-gray-100">

<nav class="bg-gray-800 fixed top-0 w-full z-10">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" id="navbarToggler" aria-controls="navbarTogglerContent" aria-expanded="false" aria-label="Main menu">
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <a href="#" class="text-white text-xl font-semibold">Offcanvas Navbar</a>
      </div>
    </div>
  </div>

  <!-- Offcanvas Menu -->
  <div id="navbarTogglerContent" class="sm:hidden fixed inset-0 z-20 bg-gray-800 bg-opacity-75 hidden">
    <div class="relative flex flex-col items-center justify-between min-h-full">
      <div class="w-full py-6 px-6 bg-gray-900 text-white">
        <div class="flex items-center justify-between">
          <h5 class="text-xl font-semibold">Offcanvas</h5>
          <button type="button" id="closeNavbar" class="text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <span class="sr-only">Close menu</span>
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
      <div class="w-full px-6 py-4">
        <ul class="space-y-4">
          <li><a href="#" class="text-white">Home</a></li>
          <li><a href="#" class="text-white">Link</a></li>
          <li class="relative">
            <button class="text-white">Dropdown</button>
            <ul class="space-y-2 mt-2 bg-gray-800 p-3 absolute w-full left-0 hidden">
              <li><a href="#" class="text-white">Action</a></li>
              <li><a href="#" class="text-white">Another action</a></li>
              <li><a href="#" class="text-white">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="w-full px-6 py-4">
        <form class="flex">
          <input type="search" class="form-input w-full px-4 py-2 text-gray-700 border border-gray-500 rounded-l-md focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Search">
          <button type="submit" class="btn bg-green-500 text-white px-4 py-2 rounded-r-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            Search
          </button>
        </form>
      </div>
    </div>
  </div>
</nav>

  <!-- Javascript -->
  <script src="assets/JS/index.js"></script>
</body>
</html>
