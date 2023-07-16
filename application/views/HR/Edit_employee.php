<!DOCTYPE html>
<html>

<head>
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
    <style>
        body {
            background-image: url("<?php echo UPLOADS_BASE_URL . 'wood2.jpg'; ?>");
        }

        .form-container {
            background-color: rgb(111, 211, 20, 0.6)
        }

        .form-container input,
        select {
            opacity: 0.8;
        }

        .form-container h1 {
            font-family: Satisfy;
        }
    </style>
</head>

<body>
    <div class="flex justify-center lg:flex-row items-center h-screen p-10">
        <div class="side-container flex justify-center items-center w-1/4 h-full">
            <img class="rounded shadow" src="<?php echo UPLOADS_BASE_URL . 'hori.jpg'; ?>">
        </div>
        <div class="form-container w-3/4 p-10 shadow-md rounded bg-gray-200">
            <form class="w-full" action="<?php echo site_url('HR/Employee/update/' . $user->emp_id); ?>" method="post">
                <h1 class="text-5xl text-center font-bold mb-4 text-yellow-400">Edit Employee</h1>
                <div class="flex justify-between space-x-5">
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" value="<?php echo $user->name; ?>" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone_no">Phone No:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_no" type="text" name="phone_no" value="<?php echo $user->phone_no; ?>" required>
                    </div>
                </div>
                <div class="mb-4 w-full">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" name="address" value="<?php echo $user->address; ?>" required>
                </div>
                <div class="flex justify-between space-x-5">
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" value="<?php echo $user->username; ?>" required>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" value="<?php echo $user->password; ?>" required>
                    </div>
                </div>

                <div class="flex justify-between space-x-5">
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="job_id">Job ID</label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="job_id" name="job_id" required>
                            <option>Select Role</option>
                            <option value="1" <?php echo ($user->job_id == 1) ? 'selected' : ''; ?>>Admin</option>
                            <option value="2" <?php echo ($user->job_id == 2) ? 'selected' : ''; ?>>Manager</option>
                            <option value="3" <?php echo ($user->job_id == 3) ? 'selected' : ''; ?>>Kitchen Manager</option>
                            <option value="4" <?php echo ($user->job_id == 4) ? 'selected' : ''; ?>>Inventory Manager</option>
                            <option value="5" <?php echo ($user->job_id == 5) ? 'selected' : ''; ?>>HR Manager</option>
                            <option value="6" <?php echo ($user->job_id == 6) ? 'selected' : ''; ?>>Accounting Manager</option>
                            <option value="7" <?php echo ($user->job_id == 7) ? 'selected' : ''; ?>>Cashier</option>
                            <option value="8" <?php echo ($user->job_id == 8) ? 'selected' : ''; ?>>Guard</option>
                            <option value="9" <?php echo ($user->job_id == 9) ? 'selected' : ''; ?>>Staff</option>
                        </select>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="date_hired">Date Hired:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date_hired" type="date" name="date_hired" value="<?php echo $user->date_hired; ?>" required>
                    </div>
                </div>
                <div class="flex justify-around">
                    <div class="flex items-center justify-center">
                        <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Update Employee</button>
                    </div>
                    <div class="flex items-center justify-center">
                        <a class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" href="<?php echo site_url('HR/Employee'); ?>"> Home</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="flex justify-center lg:flex-row items-center h-screen p-10">
</body>

</html>