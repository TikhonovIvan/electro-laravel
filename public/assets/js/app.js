document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', function() {
        // Получаем данные из data-атрибутов кнопки
        const id = this.dataset.id;
        const name = this.dataset.name || 'Без названия';
        const sku = this.dataset.sku || 'N/A'; // Используем 'N/A' если артикула нет
        const price = parseFloat(this.dataset.price) || 0;
        const image = this.dataset.img || '';

        // Получаем текущую корзину или создаем пустую
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Проверяем, есть ли товар уже в корзине
        const existingItem = cart.find(item => item.id == id);
        if (existingItem) {
            existingItem.quantity = (existingItem.quantity || 0) + 1;
        } else {
            // Добавляем новый товар с обязательным полем sku
            cart.push({
                id: +id,
                name,
                price,
                image,
                sku, // Артикул теперь всегда будет присутствовать
                quantity: 1
            });
        }

        // Сохраняем обновленную корзину
        localStorage.setItem('cart', JSON.stringify(cart));

        // Обновляем интерфейс корзины
        updateCartUI();

        // Можно добавить уведомление о добавлении
        alert(`Товар "${name}" добавлен в корзину`);
    });
});

function updateCartUI() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartList = document.getElementById('cart-list');
    const itemCount = document.getElementById('cart-item-count');
    const totalPrice = document.getElementById('cart-total-price');
    const totalQty = document.getElementById('cart-total-qty');

    // Очищаем список перед обновлением
    cartList.innerHTML = '';

    let total = 0;
    let qty = 0;

    // Перебираем все товары в корзине
    cart.forEach(item => {
        const itemPrice = parseFloat(item.price) || 0;
        const itemQty = parseInt(item.quantity) || 0;
        const itemTotal = itemPrice * itemQty;

        total += itemTotal;
        qty += itemQty;

        // Добавляем товар в список
        cartList.innerHTML += `
            <div class="product-widget">
                <div class="product-img">
                    <img src="${item.image}" width="50" alt="${item.name}">
                </div>
                <div class="product-body">
                    <h3 class="product-name">${item.name}</h3>
                    <h4 class="product-price">${itemQty} × ${itemPrice.toFixed(2)} сом</h4>
                    <p class="product-sku">Артикул: ${item.sku}</p>
                    <p class="product-total">Сумма: ${itemTotal.toFixed(2)} сом</p>
                </div>
            </div>
        `;
    });

    // Обновляем счетчики
    itemCount.textContent = qty;
    totalQty.textContent = qty;
    totalPrice.textContent = total.toFixed(2);

    // Обновляем данные для чекаута (если есть на странице)
    if (document.getElementById('checkout-products')) {
        updateCheckoutSummary(cart, total);
    }
}

// Функция для обновления сводки заказа на странице оформления
function updateCheckoutSummary(cart, total) {
    const productsContainer = document.getElementById('checkout-products');
    const totalElement = document.getElementById('checkout-total');
    const productsJsonInput = document.getElementById('products-json');

    productsContainer.innerHTML = '';

    cart.forEach(item => {
        const itemTotal = item.price * (item.quantity || 1);

        productsContainer.innerHTML += `
            <div class="order-col">
                <div>${item.name} (${item.sku}) × ${item.quantity || 1}</div>
                <div>${itemTotal.toFixed(2)} сом</div>
            </div>
        `;
    });

    totalElement.textContent = total.toFixed(2) + ' сом';

    // Обновляем скрытое поле с данными о товарах
    if (productsJsonInput) {
        productsJsonInput.value = JSON.stringify(cart);
    }
}

// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    updateCartUI();
});
