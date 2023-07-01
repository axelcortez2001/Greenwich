
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
<nav class="flex items-center justify-between bg-green-900 p-4">
    <div class='h-16 w-16'>
        <img src="http://i2.wp.com/www.boholtourismph.com/wp-content/uploads/2014/11/greenwich-logo.png?resize=917%2C1024" alt="logo">
    </div>
    <ul class="flex space-x-4">
        <li><a href="#" class="text-white hover:text-gray-400">Attendance</a></li>
        <li><a href="<?php echo site_url('HR/Employee'); ?>" class="text-white hover:text-red-700 text-lg font-bold">Employee Management</a></li>
        <li><a href="#" class="text-white hover:text-gray-400">Payroll</a></li>
        <li><a href="#" class="text-white hover:text-gray-400">Inventory</a></li>
        <li><a href="#" class="text-white hover:text-gray-400">Report</a></li>
        <li><a href="#" class="text-white hover:text-gray-400"><?php echo $user['name']; ?></a></li>
        <li><a href="<?php echo site_url('dashboard/logout'); ?>" class="text-white">Logout</a></li>
    </ul>
</nav>

<div class="container mx-auto py-8">
    Welcome, <?php echo $user['name']; ?><br>
    Job: <?php echo $user['job_name']; ?><br>
    Address: <?php echo $user['address']; ?><br>
    <!-- Display other user details as needed -->
</div>
</body>
</html>
