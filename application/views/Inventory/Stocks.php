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
      <div class="flex mx-full mt-20 ">
        <!-- Sidebar -->
        <?php include '/application/views/Inventory/sidebar.php'; ?>
        <!-- Content -->
        <div class="w-3/4">
            <div class="container mx-auto mt-28 px-4 sm:px-6 lg:px-8">
                <div class="text-center text-lg font-bold">
                    <h1>Stocks</h1>
                </div>
            </div>
            <div class="overflow-x-auto">
            </div>
        </div>
      </div>
    </div>
</body>
</html>