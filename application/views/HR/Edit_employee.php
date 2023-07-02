<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="flex justify-center items-center h-screen bg-green-900 flex-col">
        <h1 class="text-2xl text-center font-bold mb-4">Add Employee</h1>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/2" 
        action="<?php echo site_url('HR/Employee/update/'.$user->emp_id); ?>" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" value="<?php echo $user->name; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" name="address" value="<?php echo $user->address; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone_no">Phone No:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_no" type="text" name="phone_no" value="<?php echo $user->phone_no; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="date_hired">Date Hired:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date_hired" type="date" name="date_hired" value="<?php echo $user->date_hired; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" value="<?php echo $user->username; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" value="<?php echo $user->password; ?>" required>
                </div>
                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="job_id">Job ID</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="job_id" name="job_id"  required>
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
            <div class="flex items-center justify-center">
                <input class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" value="Update Employee">
            </div>
        </form>
    </div>
</body>
</html>