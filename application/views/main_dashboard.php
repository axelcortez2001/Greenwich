<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
    <style>
        .dash-img {
            max-width: 100%;
            width: 100%;
            border-radius: 15px;
        }
        .del {
            font-family: Satisfy;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex flex-col min-h-screen">
        <div>
            <?php include '/application/views/dashboard.php'; ?>
        </div>
        <div class="h-full w-full absolute z-10">
            <img class="h-full w-full" src="<?php echo UPLOADS_BASE_URL . 'wood.jpeg'; ?>">
        </div>
        <div class="flex justify-center items-center z-50 h-screen pt-10 md:pl-30 md:pr-28  lg:pl-32 lg:pr-32">
            <div class="flex justify-center items-center">
                <div class="text-right border-t border-yellow-500 border-l p-5 w-1/3">
                    <h1 class="del text-5xl text-yellow-400">Delicious Authentic Pizza</h1>
                    <h1 class="text-lg text-white">Discover the essence of true pizza perfection at Greenwich. Our authentic flavors,
                        quality ingredients, and expert craftsmanship ensure an unforgettable pizza experience.</h1>
                </div>
                <div class="border-b border-r border-yellow-500 w-3/4">
                    <img class="dash-img" src="<?php echo UPLOADS_BASE_URL . 'dashbimg1.png'; ?>">
                </div>
            </div>
        </div>
    </div>
</body>

</html>