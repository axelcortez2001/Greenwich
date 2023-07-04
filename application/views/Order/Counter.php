<!DOCTYPE html>
<html>
<head>
    <title>Order Counter</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .title-text{
            background-color: #C61616;
            height: 3rem;
            width: 100%;
        }
        .second-screen{
            background-color: #18181b;
        }
    </style>
    <script src="<?php echo JS_BASE_URL .'filterproducts.js'; ?>"></script>
</head>
<body class="bg-gray-200">
    <div class="container mx-auto flex flex-col min-h-screen">
        
        <div class="flex flex-row w-full flex-grow">
            <div class="w-3/5 second-screen h-screen overflow-y-auto">
                <div class="flex mx-auto mt-4 flex-col">
                    <div class="flex items-left mb-4 h-10 px-4 space-x-4">
                        <div>
                            <input type="text" placeholder="Search..." class="px-4 py-2 border border-gray-300 w-80 rounded-md" id="searchInput">
                        </div>
                        <div>
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
                    <hr class="mb-2 px-4">
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4">
                        <!-- Display available products here -->
                        <?php foreach ($products as $product) { ?>
                            <div class="bg-white rounded-lg shadow-md p-4 product" data-category="<?php echo $product->category; ?>">
                                <img src="<?php echo UPLOADS_BASE_URL . $product->img; ?>" alt="Product Image" class="w-full h-40 object-contain">
                                <div class="text-gray-800 font-bold mb-2 product-name"><?php echo $product->name; ?></div>
                                <div class="text-gray-600 mb-2">P<?php echo $product->price; ?></div>
                                <div class="flex justify-between">
                                <?php if ($product->stock > 0) { ?>
                                    <span class="text-green-500 font-bold mb-2">Available</span>
                                <?php } else { ?>
                                    <span class="text-red-500 font-bold mb-2">Not Available</span>
                                <?php } ?>
                                </div>
                                <div class="flex justify-between">
                                        <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Add</button>     
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="w-2/5 flex-col justify-between">
                <div class="flex title-text justify-between">
                    <div class="h-10 w-10">
                        <img src="http://i2.wp.com/www.boholtourismph.com/wp-content/uploads/2014/11/greenwich-logo.png?resize=917%2C1024" alt="logo">
                    </div>
                    <div class="flex justify-end">
                        <h1 class="text-xl p-2"><?php echo $user['name']; ?></h1>
                        <a href="<?php echo site_url('dashboard/logout'); ?>" class="text-xl p-2">Logout</a>
                    </div>
                </div>
                <div class="h-80 w-full overflow-y-auto bg-gray-400">
                    
                </div>
                <div class="flex flex-row w-full py-3 pr-2 justify-between">
                    <div class="w-36 px-5">
                        <h1 class="text-xl mt-2">Total:</h1>
                    </div>
                    <div class="w-full flex">
                        <input type="text" class="w-full border border-gray-300 rounded-md px-4 py-2" >
                    </div>
                </div>
                <div class="flex flex-row w-full py-3 pr-2 justify-between">
                    <div class="w-36 px-5">
                        <h1 class="text-xl mt-2">Payment:</h1>
                    </div>
                    <div class="w-full flex">
                        <input type="text" class="w-full border border-gray-300 rounded-md px-4 py-2" >
                    </div>
                </div>
                <div class="flex flex-row w-full py-3 pr-2 justify-between">
                    <div class="w-36 px-5">
                        <h1 class="text-xl mt-2">Change:</h1>
                    </div>
                    <div class="w-full flex">
                        <input type="text" class="w-full border border-gray-300 rounded-md px-4 py-2" >
                    </div>
                </div>
                <div class="flex flex-row w-full pr-10 py-3 pl-36 justify-between">
                    <div>
                    <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Save</button>
                    </div>
                    <div>
                    <button class="bg-red-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded shadow-md mb-2" type="submit">Pay Card</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
