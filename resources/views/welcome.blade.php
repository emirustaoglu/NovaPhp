<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NovaPHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="text-center">
    <h1 class="text-5xl font-bold text-gray-900">Welcome to <span class="text-blue-500">NovaPHP</span></h1>
    <p class="text-gray-600 mt-4">A lightweight and flexible PHP framework.</p>

    <div class="mt-6">
        <a href="https://github.com/emirustaoglu/novaphpcore" target="_blank" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition">
            Read Documentation
        </a>
    </div>

    <footer class="mt-10 text-gray-500">
        &copy; 2025 NovaPHP v{{ novaVersion() }} PHP v{{ PHP_VERSION }}
    </footer>
</div>
</body>
</html>
