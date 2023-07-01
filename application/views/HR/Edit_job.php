<!DOCTYPE html>
<html>
<head>
    <title>Edit Job</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="flex justify-center items-center h-screen bg-green-900 flex-col">
        <h1 class="text-2xl text-center font-bold mb-4">Edit Job</h1>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/2" 
        action="<?php echo site_url('HR/Jobs/update/'.$jobs->job_id); ?>" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="job_id">ID:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="job_id" type="text" name="job_id" value="<?php echo $jobs->job_id; ?>" readonly>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Job Name:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" value="<?php echo $jobs->name; ?>" readonly>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description:</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="des" name="des" rows="4" required><?php echo $jobs->des; ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="salary">Salary:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="salary" type="text" name="salary" value="<?php echo $jobs->salary; ?>" required>
            </div>
            <div class="flex items-center justify-center">
                <input class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" value="Update Job">
            </div>
        </form>
    </div>
</body>
</html>
