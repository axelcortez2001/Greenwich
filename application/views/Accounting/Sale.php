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
            <div class="flex flex-col w-3/4 bg-green-600 mb-16">
                <div class="flex flex-row container p-5 space-x-5">
                    <div>
                        <input type="date" class="px-4 py-2 border border-gray-300 rounded-md" id="dateSelect">
                    </div>
                </div>
                <div class="px-2">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200">Transaction ID</th>
                                <th class="py-2 px-4 bg-gray-200">Total Amount</th>
                                <th class="py-2 px-4 bg-gray-200">Payment</th>
                                <th class="py-2 px-4 bg-gray-200">Change</th>
                                <th class="py-2 px-4 bg-gray-200">Cart Items</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($transactions as $transaction) : ?>
                                <tr>
                                    <td class="py-2 px-4 border"><?php echo $transaction->trans_id; ?></td>
                                    <td class="py-2 px-4 border"><?php echo $transaction->total_amount; ?></td>
                                    <td class="py-2 px-4 border"><?php echo $transaction->payment; ?></td>
                                    <td class="py-2 px-4 border"><?php echo $transaction->change; ?></td>
                                    <td class="py-2 px-4 border">
                                        <ul class="space-y-2">
                                            <?php foreach ($cartItems[$transaction->trans_id] as $item) : ?>
                                                <li class="text-sm">
                                                    <span class="font-bold">Name:</span> <?php echo $item['name']; ?><br>
                                                    <span class="font-bold">Quantity:</span> <?php echo $item['qty']; ?><br>
                                                    <span class="font-bold">Subtotal:</span> <?php echo $item['subtotal']; ?>
                                                </li>
                                                <hr class="border-gray-400">
                                            <?php endforeach; ?>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php include '/application/views/Accounting/botbar.php'; ?>
        </div>
    </div>
    <script src="<?php echo JS_BASE_URL .'filterpurchases.js'; ?>"></script>
</body>
</html>
