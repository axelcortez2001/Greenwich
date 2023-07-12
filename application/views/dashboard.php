<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        /* Add custom CSS */
        .fixed-navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
            background-color: #18181b;
            height: 5rem;
        }

        .active-link {
            color: #03Ac13;
            font-weight: bold;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
    <nav class="flex items-center justify-between p-4 fixed-navbar">
        <div class='h-16 w-16'>
            <a href="<?php echo site_url('dashboard'); ?>">
                <img src="http://i2.wp.com/www.boholtourismph.com/wp-content/uploads/2014/11/greenwich-logo.png?resize=917%2C1024" alt="logo">
            </a>
        </div>
        <ul class="flex space-x-4">
            <?php if ($user['job_name'] === 'HR Manager' || $user['job_name'] === 'Admin' || $user['job_name'] === 'Manager'): ?>
                <li><a href="<?php echo site_url('Employee'); ?>" class="text-white hover:text-gray-400 text-lg <?php echo ($this->uri->segment(1) == 'Employee' ? 'active-link' : ''); ?>">HR Management</a></li>
            <?php endif; ?>
            <?php if ($user['job_name'] === 'Accounting Manager' || $user['job_name'] === 'Admin'  || $user['job_name'] === 'Manager'): ?>
                <li><a href="<?php echo site_url('Accounting'); ?>" class="text-white hover:text-gray-400 text-lg <?php echo ($this->uri->segment(1) == 'Accounting' ? 'active-link' : ''); ?>">Accounting</a></li>
            <?php endif; ?>
            <?php if ($user['job_name'] === 'Inventory Manager' || $user['job_name'] === 'Admin'  || $user['job_name'] === 'Manager'): ?>
                <li><a href="<?php echo site_url('Inventory'); ?>" class="text-white hover:text-gray-400 text-lg <?php echo ($this->uri->segment(1) == 'Inventory' ? 'active-link' : ''); ?>">Inventory</a></li>
            <?php endif; ?>
            <?php if ($user['job_name'] === 'Admin' || $user['job_name'] === 'Manager'): ?>
                <li><a href="#" class="text-white hover:text-gray-400 text-lg <?php echo ($this->uri->segment(1) == 'Report' ? 'active-link' : ''); ?>">Analytics</a></li>
            <?php endif; ?>
            <li><a href="#" class="text-white hover:text-gray-400 text-lg"><?php echo $user['job_name']; ?></a></li>
            <li><a href="<?php echo site_url('dashboard/logout'); ?>" class="text-white text-lg">Logout</a></li>
        </ul>
    </nav>
</html>
