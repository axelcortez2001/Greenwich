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
            <div class="container mx-auto mt-10 px-4 sm:px-6 lg:px-8">
                <div class="text-center text-lg font-bold">
                    <h1 class="text-3xl">Purchases</h1>
                </div>
            </div>
            <div class="overflow-x-auto">
              <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-green-900 text-white uppercase text-sm leading-normal">
                  <tr>
                      <th class="py-3 px-6 text-left">Image</th>
                      <th class="py-3 px-6 text-left">Product</th>
                      <th class="py-3 px-6 text-left">Quantity</th>
                      <th class="py-3 px-6 text-left">Amount</th>
                      <th class="py-3 px-6 text-left">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($purchases as $purchase): ?>
                  <tr>
                      <td class="py-4 px-6 border-b border-gray-200">
                        <div class="h-auto w-20">
                          <img src="<?php echo UPLOADS_BASE_URL . $purchase['img']; ?>" />
                        </div>
                      </td>
                      <td class="py-4 px-6 border-b border-gray-200"><?php echo $purchase['name']; ?></td>
                      <td class="py-4 px-6 border-b border-gray-200"><?php echo $purchase['total_product']; ?></td>
                      <td class="py-4 px-6 border-b border-gray-200">P<?php echo $purchase['total_amount']; ?></td>
                      <td class="py-4 px-6 border-b border-gray-200"><?php echo $purchase['date']; ?></td>
                  
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
</body>
</html>