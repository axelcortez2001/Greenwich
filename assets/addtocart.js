function updateCartItems() {
    var cartContainer = document.getElementById('cartItems');
    cartContainer.innerHTML = '';

    <?php foreach ($cartItems as $item) { ?>
        var productHTML = '<div>' +
            '<span><?php echo $item['name']; ?></span>' +
            '<span><?php echo $item['qty']; ?></span>' +
            '<span><?php echo $item['price']; ?></span>' +
            '</div>';

        cartContainer.innerHTML += productHTML;
    <?php } ?>
    updateTotalAmount();
}
