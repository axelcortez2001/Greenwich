<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex flex-col min-h-screen">
        <div>
            <?php include '/application/views/dashboard.php'; ?>
        </div>
        <!-- Main content -->
        <div class="flex mt-20">
            <!-- Sidebar -->
            <?php include '/application/views/Accounting/sidebar.php'; ?>
            <!-- Content -->
            <div class="flex flex-col w-3/4 bg-green-600 mb-16 h-screen">
                <div class="flex flex-row container p-5 space-x-5">
                    <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-green-900 text-white uppercase text-sm leading-normal">
                        <tr>
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Phone No.</th>
                            <th class="py-3 px-6 text-left">Date Hired</th>
                            <th class="py-3 px-6 text-left">Role</th>
                            <th class="py-3 px-6 text-left">Total Salary Received</th>
                            <th class="py-3 px-6 text-left">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($Emp as $user): ?>
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['emp_id']; ?></td>
                            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['name']; ?></td>
                            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['phone_no']; ?></td>
                            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['date_hired']; ?></td>
                            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['job_name']; ?></td>
                            <td class="py-4 px-6 border-b border-gray-200"><?php echo $user['pay_salary']; ?></td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <a href="<?php echo site_url('Accounting/Accounting/show_payrollByEmp/' . $user['emp_id']); ?>" class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Payroll</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <?php include '/application/views/Accounting/botbar.php'; ?>
        </div>
    </div>
</body>
</html>
