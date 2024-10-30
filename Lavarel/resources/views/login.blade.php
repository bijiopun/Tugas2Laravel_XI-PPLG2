<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen ">

    <form id="loginForm" class="bg-yellow-400 p-10 rounded-2xl shadow-lg w-96">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Login</h2>

        <div class="mb-6">
            <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
            <input type="text" name="username" id="username" class="mt-1 block w-full p-3 border border-gray-300 rounded-full focus:outline-none focus:ring focus:ring-yellow-500" required>
        </div>

        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full p-3 border border-gray-300 rounded-full focus:outline-none focus:ring focus:ring-yellow-500" required>
        </div>

        <button type="submit" class="w-full bg-yellow-500 text-white font-semibold py-2 rounded-full hover:bg-yellow-600 transition">LOGIN INDEX</button>

    <script src="js/script.js"></script>
</body>
</html>