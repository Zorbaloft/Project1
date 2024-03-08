const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
const shoppingCart = document.querySelector('#shoppingCart');

function openShoppingCart() {

    shoppingCart.classList.add('show');
}

function closeShoppingCart() {

    shoppingCart.classList.remove('show');
}

function isItemInCart(itemName) {
    const cartItems = shoppingCart.querySelectorAll('.shop-item');
    for (const item of cartItems) {
        const name = item.querySelector('.item-name').textContent;
        if (name === itemName) {
            return true;
        }
    }
    return false;
}




function showShoppingCart() {
    shoppingCart.classList.add('show');
}



document.querySelector('.badge-container').addEventListener('click', (event) => {
    event.preventDefault();
    openShoppingCart();
});



document.querySelector('.btn-close').addEventListener('click', (event) => {
    event.preventDefault();
    closeShoppingCart();
});


function updateCartItemCount() {
    const cartItemCountElement = document.getElementById('cartItemCount');
    const cartItems = shoppingCart.querySelectorAll('.shop-item');
    const itemCount = cartItems.length;
    cartItemCountElement.textContent = `(${itemCount})`;
}


updateCartItemCount();



function changeQuantity(button, change) {
    const quantityInput = button.closest('.quantity-controls').querySelector('.quantity');
    let currentQuantity = parseInt(quantityInput.value) || 1;
    currentQuantity = Math.max(1, currentQuantity + change);
    quantityInput.value = currentQuantity;
}




addToCartButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const productId = button.getAttribute('data-id');
        const productName = button.getAttribute('data-name');
        const productPrice = parseFloat(button.getAttribute('data-price'));
        const productImage = button.getAttribute('data-image');
        const quantityInput = button.closest('.product-details').querySelector('.quantity');
        const quantity = parseInt(quantityInput.value) || 1;

        if (isItemInCart(productName)) {
            alert('This item is already in your cart.');
            return;
        }

        const cartItem = document.createElement('div');
        cartItem.className = 'shop-item position-relative mb-3 p-4 rounded border';
        cartItem.innerHTML = `
            <div class="d-flex align-items-center  ">
                <div class="shop-item-image me-6">
                    <img src="${productImage}" width="60" height="80" alt="">
                </div>
                <div class="shop-item-description flex-column d-flex">
                    <p class="item-name fw-500 text-body-emphasis">${productName}</p>
                    <span class="quantity fs-15px text-body-emphasis ms-2">Quantidade: ${quantity}</span>
                    <span class="item-price fs-15px text-body-emphasis ms-2">Valor Und: ${productPrice.toFixed(2)} €</span>
                </div>
                <a href="#" class="clear-product" data-id="${productId}" ><i class="fa-solid fa-xmark position-absolute"></i></a>
            </div>
        `;

        shoppingCart.querySelector('.offcanvas-cart').appendChild(cartItem);

    
        showShoppingCart();
        updateCartItemCount();

        fetch('api/update_cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `IDP=${productId}&quantity=${quantity}`
        });
    });
});


document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('click', (event) => {
        const removeButton = event.target.closest('.clear-product');
        if (removeButton) {
            event.preventDefault();

            const productId = removeButton.getAttribute('data-id');
            const cartItem = removeButton.closest('.shop-item');

            cartItem.remove();

            fetch('api/remove_from_cart.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `IDP=${productId}`
            })
      
            updateCartItemCount();
        }
    })
});
