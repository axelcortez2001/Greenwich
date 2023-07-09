<html>
    <head>
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <style>
          h3{
            background-color:  #03ac13;
          }
        </style>
        <script src="<?php echo JS_BASE_URL .'filterstocks.js'; ?>"></script>
    </head>
    <body class="bg-gray-200">
      <!-- header -->
    <div class="flex flex-col">
      <div>
        <?php include '/application/views/dashboard.php'; ?>
      </div>
      <!-- Main content -->
      <div class="flex mx-full mt-20">
      <!-- Sidebar -->
        <?php include '/application/views/Inventory/sidebar.php'; ?>
      <!-- Content -->
      <div class="w-3/4">
          <div class="container mx-auto mt-16 px-4 sm:px-6 lg:px-8">
              <div class="text-center text-lg font-bold">
                  <h1 class="text-5xl font-bold">Stocks</h2>
                  <select id="categorySelect">
                    <option value="All">All</option>
                    <option value="Special Offers">Special Offers</option>
                    <option value="Pizza">Pizza</option>
                    <option value="Pasta">Pasta</option>
                    <option value="Group Meals">Group Meals</option>
                    <option value="Solo Meals">Solo Meals</option>
                    <option value="Drinks">Drinks</option>
                  </select>
                  <?php foreach ($stocks as $category => $categoryStocks): ?>
                    <div id="<?php echo $category; ?>">                    
                    <input type="hidden" id="stocksData" value="<?php echo htmlspecialchars(json_encode(array_keys($stocks))); ?>">
                      <h3 class="text-xl font-bold mt-6"><?php echo $category; ?></h3>
                      <table class="w-full border-collapse mt-4 text-center">
                          <thead>
                              <tr>
                                  <th class="py-2 px-4 bg-gray-200">Name</th>
                                  <th class="py-2 px-4 bg-gray-200">Category</th>
                                  <th class="py-2 px-4 bg-gray-200">Stock</th>
                                  <th class="py-2 px-4 bg-gray-200">Price</th>
                                  <th class="py-2 px-4 bg-gray-200">Image</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($categoryStocks as $stock): ?>
                                  <tr>
                                      <td class="py-2 px-4 border"><?php echo $stock->name; ?></td>
                                      <td class="py-2 px-4 border"><?php echo $stock->category; ?></td>
                                      <td style="color: <?php echo $stock->stockColor; ?>"
                                      class="py-2 px-4 border"><?php echo $stock->stock; ?></td>
                                      <td class="py-2 px-4 border"><?php echo $stock->price; ?></td>
                                      <td class="py-2 px-4 border">
                                          <img src="<?php echo UPLOADS_BASE_URL . $stock->img; ?>" alt="Product Image" class="w-full h-40 object-contain">
                                      </td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                      </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>
    </div>
</body>
</html>