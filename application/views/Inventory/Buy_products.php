<html>
    <head>
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200">
        <!-- header -->
        <div class="flex flex-col">
            <div>
                <?php include '/application/views/dashboard.php'; ?>
            </div>
            <!-- Main content -->
            <div class="flex mt-20">
                <!-- Sidebar -->
                <?php include '/application/views/Inventory/sidebar.php'; ?>
                <!-- Content -->
                <div class="flex flex-col w-3/4 bg-green-600">
                    <div class="flex mx-auto mt-20 justify-start">
                        <div class="flex items-left mb-4 h-10">
                            <h1 class="text-center text-lg font-bold">Buy Products</h1>
                            <div class="flex space-x-4">
                                <input type="text" placeholder="Search..." class="px-4 py-2 border border-gray-300 rounded-md">
                                <select class="px-4 py-2 border border-gray-300 rounded-md">
                                    <option value="">Filter</option>
                                    <!-- Add filter options here -->
                                </select>
                                <button class="px-4 py-2 bg-blue-500 text-white rounded-md">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4">
                        <!-- Display available products here -->
                        <?php foreach ($products as $product) { ?>
                            <div class="bg-white rounded-lg shadow-md p-4">
                                <img src="<?php echo UPLOADS_BASE_URL . $product->img; ?>" alt="Product Image" class="w-full h-40 object-contain">
                                <div class="text-gray-800 font-bold mb-2"><?php echo $product->name; ?></div>
                                <div class="text-gray-600 mb-2">P<?php echo $product->price; ?></div>
                                <div class="text-gray-600 mb-2">Supplier: <?php echo $product->supplier; ?></div>
                                <div class="text-gray-600 mb-2">Category: <?php echo $product->category; ?></div>
                                <div class="flex justify-between">
                                <a href="#" class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Buy</a>
                                <input type="number" class="w-20 bg-gray-200" id="total" name="total">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
