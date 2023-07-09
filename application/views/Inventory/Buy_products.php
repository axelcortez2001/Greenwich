<html>
    <head>
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="<?php echo JS_BASE_URL .'filterproducts.js'; ?>"></script>
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
                    <div class="flex mx-auto mt-10">
                        <div class="flex items-left mb-4 h-10">
                            <div class="flex space-x-4">
                                <input type="text" placeholder="Search..." class="px-4 py-2 border border-gray-300 rounded-md" id="searchInput">
                                <select class="px-4 py-2 border border-gray-300 rounded-md" id="categorySelect">
                                    <option value="All">All</option>
                                    <option value="Special Offers">Special Offers</option>
                                    <option value="Pizza">Pizza</option>
                                    <option value="Pasta">Pasta</option>
                                    <option value="Group Meals">Group Meals</option>
                                    <option value="Solo Meals">Solo Meals</option>
                                    <option value="Drinks">Drinks</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-2">
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4">
                        <!-- Display available products here -->
                        <?php foreach ($products as $product) { ?>
                            <div class="bg-white rounded-lg shadow-md p-4 product" data-category="<?php echo $product->category; ?>">
                                <img src="<?php echo UPLOADS_BASE_URL . $product->img; ?>" alt="Product Image" class="w-full h-40 object-contain">
                                <div class="text-gray-800 font-bold mb-2 product-name"><?php echo $product->name; ?></div>
                                <div class="text-gray-600 mb-2">P<?php echo $product->price; ?></div>
                                <div class="text-gray-600 mb-2">Supplier: <?php echo $product->supplier; ?></div>
                                <div class="text-gray-600 mb-2">Category: <?php echo $product->category; ?></div>
                                <div class="flex justify-between">
                                    <form action="<?php echo site_url('Inventory/Inventory/purchase_prod/' . $product->product_id); ?>" method="post">
                                        <input type="number" class="w-20 bg-gray-200" id="total_product" name="total_product">
                                        <input type="hidden" id="Status" name="Status" value="Pending">
                                        <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Buy</button>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
