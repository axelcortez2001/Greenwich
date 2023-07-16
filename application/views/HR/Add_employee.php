<!DOCTYPE html>
<html>

<head>
    <title>Add Employee</title>
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

        .side-container {}
    </style>
</head>

<body>
    <div class="flex justify-center lg:flex-row items-center h-screen p-10">
        <div class="side-container flex justify-center items-center w-1/4 h-full">
            <img class="rounded shadow" src="<?php echo UPLOADS_BASE_URL . 'hori.jpg'; ?>">
        </div>
        <div class="form-container w-3/4 p-10 shadow-md rounded bg-gray-200">
            <form class=" w-full" action="<?php echo site_url('HR/Employee/create_emp'); ?>" method="post">
                <h1 class="text-5xl text-center font-bold mb-4 text-yellow-400">Add Employee</h1>
                <div class="flex justify-between space-x-5">
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" required>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="salary">Phone No.</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_no" type="text" name="phone_no" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" name="address" required>
                </div>
                <div class="flex justify-between space-x-5">
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" required>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
                    </div>
                </div>
                <div class="flex justify-between space-x-5">
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="job_id">Job ID</label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="job_id" name="job_id" required>
                            <option>Select Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Manager</option>
                            <option value="4">Inventory Manager</option>
                            <option value="5">HR Manager</option>
                            <option value="6">Accounting Manager</option>
                            <option value="7">Cashier</option>
                            <option value="8">Guard</option>
                            <option value="9">Staff</option>
                        </select>
                    </div>
                    <div class="mb-4 w-ful">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="date_hired">Date</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date_hired" type="date" name="date_hired" required>
                    </div>
                </div>
                <div class="flex justify-around">
                    <div class="flex items-center justify-center">
                        <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Add Employee</button>
                    </div>
                    <div class="flex items-center justify-center">
                        <a class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" href="<?php echo site_url('HR/Employee'); ?>"> Home</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>