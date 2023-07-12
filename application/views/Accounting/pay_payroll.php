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
                <div class="p-4 flex justify-between">
                    <div>
                        <span class="font-bold">Name:</span>
                        <span><?php echo $PayEmp->name; ?></span>
                    </div>
                    <div>
                        <span class="font-bold">Role:</span>
                        <span><?php echo $PayEmp->job_name; ?></span>
                    </div>
                    <div>
                        <a href="<?php echo site_url('Accounting/Accounting/show_addpayroll/' . $PayEmp->emp_id); ?>" class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2">Add Payroll</a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full w-full bg-white shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-green-900 text-white uppercase text-sm leading-normal">
                            <tr>
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">From</th>
                                <th class="py-3 px-6 text-left">To</th>
                                <th class="py-3 px-6 text-left">Date Received</th>
                                <th class="py-3 px-6 text-left">Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($GetPay as $payroll): ?>
                                <tr>
                                    <td class="py-4 px-6 border-b border-gray-200"><?php echo $payroll['payroll_id']; ?></td>
                                    <td class="py-4 px-6 border-b border-gray-200"><?php echo $payroll['from']; ?></td>
                                    <td class="py-4 px-6 border-b border-gray-200"><?php echo $payroll['to']; ?></td>
                                    <td class="py-4 px-6 border-b border-gray-200"><?php echo $payroll['date']; ?></td>
                                    <td class="py-4 px-6 border-b border-gray-200"><?php echo $payroll['pay_salary']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include '/application/views/Accounting/botbar.php'; ?>
        </div>
    </div>
</body>
</html>
