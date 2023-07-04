<style>
    .side-bar{
        background-color: #03ac13;

    }
    .active-link {
            color: #03Ac13;
            font-weight: bold;
        }
</style>
<div class="side-bar text-white w-1/4 overflow-y-auto">
        <div class="bg-red-600 w-full py-2 mt-2">
            <li class="block py-2 px-4 text-lg font-bold text-white">Inventory Management</li>
        </div>
    <ul class="p-4">
        
        <li><a href="<?php echo site_url('Inventory/Inventory'); ?>" class="block py-2 px-4 hover:bg-green-700
        <?php echo ($this->uri->segment(1) == 'Stocks' ? 'active-link' : ''); ?>">Stocks</a></li>
        <li><a href="<?php echo site_url('Inventory/Inventory/all_products'); ?>" class="block py-2 px-4 hover:bg-green-700
        <?php echo ($this->uri->segment(1) == 'Buy Products' ? 'active-link' : ''); ?>">Buy Products</a></li>
        <li><a href="<?php echo site_url('Inventory/Inventory/purchases'); ?>" class="block py-2 px-4 hover:bg-green-700
        <?php echo ($this->uri->segment(1) == 'Purchases' ? 'active-link' : ''); ?>">Purchases</a></li>
    </ul>
</div>