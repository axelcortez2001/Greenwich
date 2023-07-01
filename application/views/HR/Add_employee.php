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
        action="<?php echo site_url('HR/Employee/create_emp'); ?>" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" name="address" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="salary">Phone No.</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_no" type="text" name="phone_no" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" name="password" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="job_id">Job ID</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="job_id" name="job_id" required>
                    <option>Select Role</option>    
                    <option value="1">Admin</option>
                    <option value="2">Manager</option>
                    <option value="3">Kitchen Manager</option>
                    <option value="4">Inventory Manager</option>
                    <option value="5">HR Manager</option>
                    <option value="6">Accounting Manager</option>
                    <option value="7">Cashier</option>
                    <option value="8">Guard</option>
                    <option value="9">Staff</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="date_hired">Date</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date_hired" type="date" name="date_hired" required>
            </div>
            <div class="flex items-center justify-center">
                <input class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" value="Add Employee">
            </div>
        </form>
    </div>
</body>
</html>
