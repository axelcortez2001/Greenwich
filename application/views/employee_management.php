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
                <li><a href="#" class="text-white hover:text-red-700 text-lg font-bold">Employee Management</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Payroll</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Inventory</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Report</a></li>
                <li><a href="#" class="text-white hover:text-gray-400"><?php echo $user['name']; ?></a></li>
                <li><a href="<?php echo site_url('dashboard/logout'); ?>" class="text-white">Logout</a></li>
            </ul>
        </nav>
        <div class="container flex flex-col mt-5 px-10">
  <div>
    <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Hire Employee</button>
    <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Job Application</button>
  </div>
  <div class="w-full">
    <table class="min-w-max w-full bg-white shadow-md rounded-lg overflow-hidden">
      <thead class="bg-green-900 text-white uppercase text-sm leading-normal">
        <tr>
          <th class="py-3 px-6 text-left">ID</th>
          <th class="py-3 px-6 text-left">Name</th>
          <th class="py-3 px-6 text-left">Address</th>
          <th class="py-3 px-6 text-left">Phone No.</th>
          <th class="py-3 px-6 text-left">Designation</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($users as $user): ?>
        <tr>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['emp_id']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['name']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['address']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['phone_no']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['job_name']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

    </body>
</html>