document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.dataset.id;
        const name = this.dataset.name;
        const price = parseFloat(this.dataset.price);
        const image = this.dataset.img;

        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        const existing = cart.find(item => item.id == id);
        if (existing) {
            existing.quantity += 1;
        } else {
            cart.push({ id: +id, name, price, image, quantity: 1 });
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartUI();
    });
});

function updateCartUI() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartList = document.getElementById('cart-list');
    const itemCount = document.getElementById('cart-item-count');
    const totalPrice = document.getElementById('cart-total-price');
    const totalQty = document.getElementById('cart-total-qty');

    cartList.innerHTML = '';
    let total = 0;
    let qty = 0;

    cart.forEach(item => {
        total += item.price * item.quantity;
        qty += item.quantity;

        cartList.innerHTML += `
            <div class="product-widget">
                <div class="product-img"><img src="${item.image}" width="50"></div>
                <div class="product-body">
                    <h3 class="product-name">${item.name}</h3>
                    <h4 class="product-price">${item.quantity} x ${item.price} сом</h4>
                </div>
            </div>
        `;
    });

    itemCount.textContent = qty;
    totalQty.textContent = qty;
    totalPrice.textContent = total.toFixed(2);
}

updateCartUI();
