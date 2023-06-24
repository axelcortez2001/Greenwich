<html>
<head>
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Login</h1>

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?php echo site_url('login/authenticate'); ?>" method="post">
         <?php if (isset($_POST['submit']) && isset($error)) { ?>
            <p class="text-red-500 mb-4"><?php echo $error; ?></p>
            <script>
                alert("<?php echo $error; ?>");
            </script>
        <?php } ?>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
        </div>

        <div class="flex items-center justify-between">
            <input class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" value="Login">
        </div>

        </form>
    </div>
</body>
</html>
