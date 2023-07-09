<style>
    .side-bar{
        background-color: #03ac13;

    }
    .active-link {
            color: #03Ac13;
            font-weight: bold;
        }
</style>
<div class="side-bar text-white w-1/4 overflow-y-auto h-auto">
        <div class="bg-red-600 w-full py-2">
            <li class="block py-2 px-4 text-lg font-bold text-white">Accounting Management</li>
        </div>
    <ul class="p-4">
        
        <li><a href="<?php echo site_url('Accounting/Accounting'); ?>" class="block py-2 px-4 hover:bg-green-700
        <?php echo ($this->uri->segment(1) == 'Stocks' ? 'active-link' : ''); ?>">Purchase Transactions</a></li>
        <li><a href="<?php echo site_url('Accounting/Accounting/show_sales'); ?>" class="block py-2 px-4 hover:bg-green-700
        <?php echo ($this->uri->segment(1) == 'Buy Products' ? 'active-link' : ''); ?>">Sale Transactions</a></li>
        <li><a href="<?php echo site_url('Inventory/Inventory/purchases'); ?>" class="block py-2 px-4 hover:bg-green-700
        <?php echo ($this->uri->segment(1) == 'Purchases' ? 'active-link' : ''); ?>">Payrolls</a></li>
    </ul>
</div>