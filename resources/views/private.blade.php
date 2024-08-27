<!-- resources/views/private.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
        <h2 class="text-center text-2xl font-bold mb-6">Private Page</h2>
        <p class="text-center text-gray-700">Welcome to the private page! You are logged in.</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full bg-red-500 text-white py-2 rounded mt-4">Logout</button>
        </form>
    </div>
</body>
</html>
