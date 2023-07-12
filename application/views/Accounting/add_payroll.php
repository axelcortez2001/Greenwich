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
                <div class="p-4">
                    <form action="<?php echo site_url('Accounting/Accounting/addpayroll'); ?>" method="post">
                    <input  id="emp_id" name="emp_id" type="hidden" value="<?php echo $PayEmp->emp_id; ?>">
                    <input  id="job_id" name="job_id" type="hidden" value="<?php echo $PayEmp->job_id; ?>">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="from">From:</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="from" name="from" type="date" placeholder="From date">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="to">To:</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="to" name="to" type="date" placeholder="To date">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">Amount:</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" name="date" type="date" placeholder="Date received">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">Amount:</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pay_salary" name="pay_salary" type="number" value="<?php echo $PayEmp->salary; ?>">
                        </div>
                        <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Pay</button>
                    </form>
                </div>
            </div>
            <?php include '/application/views/Accounting/botbar.php'; ?>
        </div>
    </div>
</body>
</html>
