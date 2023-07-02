<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
<div class="flex mt-20">
                <!-- Sidebar -->
                <?php include '/application/views/Inventory/sidebar.php'; ?>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">

        <form action="<?php echo site_url('Inventory/Inventory/add_prod'); ?>" method="post" enctype="multipart/form-data" class="max-w-md bg-white p-6 rounded-lg shadow">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
                <input type="text" name="price" id="price" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="supplier" class="block text-gray-700 font-bold mb-2">Supplier:</label>
                <input type="text" name="supplier" id="supplier" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="img" class="block text-gray-700 font-bold mb-2">Image:</label>
                <input type="file" name="img" id="img" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-bold mb-2">Category:</label>
                <input type="text" name="category" id="category" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
            </div>

            <input type="submit" name="submit" value="Add Product" class="bg-indigo-500 text-white px-4 py-2 rounded-md">

        </form>
    </div>
</div>
</body>
</html>
