
var paymentInput = document.getElementById('payment');
var changeInput = document.getElementById('change');
var totalAmountInput = document.getElementById('total_amount');

paymentInput.addEventListener('input', function() {

    var payment = parseFloat(paymentInput.value);
    var totalAmount = parseFloat(totalAmountInput.value);
    var change = payment - totalAmount;
    changeInput.value = change.toFixed(2);
});