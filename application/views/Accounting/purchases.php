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
                    <div>
                        <select class="px-4 py-2 border border-gray-300 rounded-md" id="categorySelect">
                            <option value="All">All</option>
                            <option value="Pending">Pending</option>
                            <option value="Paid">Paid</option>
                        </select>
                    </div>
                    <div>
                        <input type="date" class="px-4 py-2 border border-gray-300 rounded-md" id="dateSelect">
                    </div>
                </div>
                <div class="px-2">
                    <table class="w-full border-collapse text-center rounded-md">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200">ID</th>
                                <th class="py-2 px-4 bg-gray-200">Name</th>
                                <th class="py-2 px-4 bg-gray-200">Quantity</th>
                                <th class="py-2 px-4 bg-gray-200">Amount</th>
                                <th class="py-2 px-4 bg-gray-200">Date</th>
                                <th class="py-2 px-4 bg-gray-200">Status</th>
                            </tr>
                        </thead>
                        <tbody class=" bg-gray-400">
                            <?php foreach ($transactions as $trans) : ?>
                                <tr class="product" data-category="<?php echo $trans->status; ?>">
                                    <td class="py-2 px-4 border"><?php echo $trans->purchase_id; ?></td>
                                    <td class="py-2 px-4 border"><?php echo $trans->name; ?></td>
                                    <td class="py-2 px-4 border"><?php echo $trans->total_product; ?></td>
                                    <td class="py-2 px-4 border"><?php echo $trans->total_amount; ?></td>
                                    <td class="py-2 px-4 border product-date"><?php echo $trans->date; ?></td>
                                    <?php if ($trans->status === 'Paid') { ?>
                                        <td class="py-2 px-4 border"><?php echo $trans->status; ?></td>
                                    <?php } else { ?>
                                        <td class="py-2 px-4 border">
                                            <a href="<?php echo site_url('Accounting/Accounting/pay_purchase/' . $trans->purchase_id); ?>" 
                                            class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Pay</a>
                                        </td>
                                    <?php } ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include '/application/views/Accounting/botbar.php'; ?>
        </div>
    </div>
    <script src="<?php echo JS_BASE_URL .'filterpurchases.js'; ?>"></script>
</body>
</html>
