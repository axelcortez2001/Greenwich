<html>

<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
  <style>
    th {
      font-family: Satisfy;
    }

    body {
      background-image: url("<?php echo UPLOADS_BASE_URL . 'wood2.jpg'; ?>");
    }

    table {
      opacity: 0.8;
    }
  </style>
</head>

<body class="bg-gray-200">
  <div class="flex flex-col h-screen">
    <!-- header -->
    <?php include '/application/views/dashboard.php'; ?>
    <!-- body -->
    <div class="overflow-x-auto overflow-y-auto mt-20 p-10">
      <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-yellow-400 text-green-800 uppercase text-xl leading-normal">
          <tr>
            <th class="py-3 px-6 text-left">Job ID</th>
            <th class="py-3 px-6 text-left">Job Name</th>
            <th class="py-3 px-6 text-left">Description</th>
            <th class="py-3 px-6 text-left">Salary</th>
            <th class="py-3 px-6 text-left">Employees</th>
            <th class="py-3 px-6 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($jobs as $job) : ?>
            <tr>
              <td class="py-4 px-6 border-b border-gray-200"><?php echo $job['job_id']; ?></td>
              <td class="py-4 px-6 border-b border-gray-200"><?php echo $job['name']; ?></td>
              <td class="py-4 px-6 border-b border-gray-200"><?php echo $job['des']; ?></td>
              <td class="py-4 px-6 border-b border-gray-200 text-center"><?php echo $job['salary']; ?></td>
              <td class="py-4 px-6 border-b border-gray-200 text-center"><?php echo $job['employee_count']; ?></td>
              <td class="py-4 px-6 border-b border-gray-200 text-center">
                <a href="<?php echo site_url('HR/Jobs/edit/' . $job['job_id']); ?>" 
                class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Edit</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  </div>
</body>

</html>