<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("<?php echo UPLOADS_BASE_URL . 'wood2.jpg'; ?>");
        }

        .image-container {
            width: 60rem;
            max-width: 700px;
            position: absolute;
            left: 45%;
            transform: translateX(-65%);
        }

        .image-container img {
            border-radius: 10px;
        }

        .login-container {
            position: absolute;
            left: 65%;
            transform: translateX(-55%);
            opacity: 0.81;
        }
    </style>
</head>

<body>
    <div class="flex justify-center items-center h-screen ">
        <div class="image-container z-10">
            <img class="w-full" src="<?php echo UPLOADS_BASE_URL . 'login'; ?>" alt="Logo">
        </div>
        <div class="login-container w-full max-w-md z-50">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 z-50" action="<?php echo site_url('login/authenticate'); ?>" method="post">
                <img class="rounded w-full" src="<?php echo UPLOADS_BASE_URL . 'greenwich'; ?>" alt="Logo">
                <hr class="border-b border-green-900">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username:</label>
                    <div class="relative">
                        <input class="border-b border-gray-900 focus:outline-none focus:border-green-900 text-gray-700 appearance-none w-full py-2 px-3 leading-tight" id="username" type="text" name="username" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password:</label>
                    <div class="relative">
                        <input class="border-b border-gray-900 focus:outline-none focus:border-green-900 text-gray-700 appearance-none w-full py-2 px-3 leading-tight" id="password" type="password" name="password" required>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <input class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" value="Login">
                </div>
            </form>

        </div>
    </div>
</body>

</html>