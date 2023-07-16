<html>

<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
  <style>
    body {
      background-image: url("<?php echo UPLOADS_BASE_URL . 'wood2.jpg'; ?>");
    }

    h1 {
      font-family: Satisfy;
    }

    table {
      opacity: 0.9;
    }
  </style>
</head>

<body>
  <!-- header -->
  <?php include '/application/views/dashboard.php'; ?>
  <!-- body -->
  <div class="container mx-auto mt-28 px-10 sm:px-6 lg:px-8">
    <div class="text-center text-5xl font-bold text-yellow-400">
      <h1>HR Management</h1>
    </div>
    <div class="flex flex-wrap space-x-4 mb-4">
      <a href="<?php echo site_url('HR/Employee/add'); ?>" class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Hire Employee</a>
      <a href="<?php echo site_url('HR/Jobs'); ?>" class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Jobs</a>
    </div>
  </div>
  <div class="overflow-x-auto overflow-y-auto px-10  sm:px-6 lg:px-8">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
      <thead class="bg-green-900 text-yellow-400 uppercase text-xl leading-normal">
        <tr>
          <th class="py-3 px-6 text-left">ID</th>
          <th class="py-3 px-6 text-left">Name</th>
          <th class="py-3 px-6 text-left">Address</th>
          <th class="py-3 px-6 text-left">Phone No.</th>
          <th class="py-3 px-6 text-left">Date Hired</th>
          <th class="py-3 px-6 text-left">Designation</th>
          <th class="py-3 px-6 text-left">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user) : ?>
          <tr>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['emp_id']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['name']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['address']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['phone_no']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['date_hired']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['job_name']; ?></td>
            <td class="py-4 px-6 border-b border-gray-200">
              <a href="<?php echo site_url('HR/Employee/edit/' . $user['emp_id']); ?>" class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Edit</a>
              <a href="<?php echo site_url('HR/Employee/delete/' . $user['emp_id']); ?>" class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>