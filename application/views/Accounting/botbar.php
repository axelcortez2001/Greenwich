<style>
    .bottom-bar {
        background-color: #18181b;
        position: fixed;
        right: 0;
        bottom: 0;
    }
</style>    
<div class="bottom-bar text-white w-3/4 h-16 px-5">
    <div class="flex items-center space-x-5">
        <div>
            <h1 class="text-white font-bold">Accounts Payable:</h1>
            <h1 class="text-2xl text-white font-bold">P<?php echo $Pending['total_amount']; ?></h1>
        </div>
        <div>
            <h1 class="text-white font-bold">Total Sales:</h1>
            <h1 class="text-2xl text-white font-bold">P<?php echo $sales['total_amount']; ?></h1>
        </div>
        <div>
            <h1 class="text-white font-bold">Total Expenses:</h1>
            <h1 class="text-2xl text-white font-bold">P</h1>
        </div>
        <div>
            <h1 class="text-white font-bold">Total Income:</h1>
            <h1 class="text-2xl text-white font-bold">Pending</h1>
        </div>
        <div>
            <h1 class="text-white font-bold">Account:</h1>
            <h1 class="text-2xl text-white font-bold">Pending</h1>
        </div>
    </div>
</div>
