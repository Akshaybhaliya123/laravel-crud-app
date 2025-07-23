<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-purple-500 to-indigo-600 min-h-screen flex flex-col justify-center items-center text-white">

    <div class="text-center px-4">
        <h1 class="text-5xl font-bold mb-6 animate__animated animate__fadeInDown">Welcome to the CRUD App</h1>
        <p class="text-xl mb-8 max-w-xl mx-auto">Easily create, read, update, and delete your records with this Laravel application. Built for speed and simplicity.</p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('products.create') }}" class="bg-white text-purple-600 hover:bg-purple-100 px-6 py-3 rounded-full font-semibold shadow-lg transition duration-300">
                ➕ Add New Item
            </a>
            <a href="{{ route('products.index') }}" class="bg-white text-purple-600 hover:bg-purple-100 px-6 py-3 rounded-full font-semibold shadow-lg transition duration-300">
                📋 View All Items
            </a>
        </div>
    </div>

    <footer class="mt-16 text-sm text-white/80">
        © {{ date('Y') }} CRUD App — Built with Laravel & Tailwind CSS
    </footer>

</body>
</html>
