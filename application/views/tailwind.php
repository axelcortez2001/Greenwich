
<html>
<head>
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gradient-to-r from-indigo-500 to-purple-500">
    <div class="bg-white p-8 rounded-lg shadow-lg w-1/2">
        <h1 class="text-3xl mb-6 text-center font-bold text-gray-800">Login</h1>
        <form method="post" action="login.php">
            <div class="mb-6">
                <label class="block mb-2 font-bold text-gray-700" for="username">Username</label>
                <input class="border border-gray-300 rounded-md py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-indigo-500" type="text" name="username" id="username" required>
            </div>
            <div class="mb-6">
                <label class="block mb-2 font-bold text-gray-700" for="password">Password</label>
                <input class="border border-gray-300 rounded-md py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-indigo-500" type="password" name="password" id="password" required>
            </div>
            <div class="flex items-center justify-between mb-6">
                <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="submit">Login</button>
                <a class="inline-block align-baseline font-bold text-sm text-indigo-500 hover:text-indigo-800" href="#">Forgot Password?</a>
            </div>
            <p class="text-sm text-gray-600 text-center">Don't have an account? <a class="text-indigo-500 hover:text-indigo-800" href="#">Sign up</a></p>
        </form>
    </div>
</body>
