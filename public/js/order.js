document.addEventListener('DOMContentLoaded', () => {
    const orderPage = document.querySelector('.order-page');
    const navbar = document.querySelector('.navbar');
    if (orderPage && navbar) {
        const updateOffset = () => {
            orderPage.style.setProperty('--order-sticky-offset', `${navbar.getBoundingClientRect().height + 16}px`);
        };
        updateOffset();
        if ('ResizeObserver' in window) new ResizeObserver(updateOffset).observe(navbar);
        else window.addEventListener('resize', updateOffset);
    }
    const cart = new Map();
    const items = document.getElementById('order-items');
    const status = document.getElementById('order-status');
    const checkout = document.getElementById('place-order');
    const dialog = document.getElementById('confirmation');
    const money = value => `₱${value.toFixed(2)}`;
    const emptyMarkup = items.innerHTML;

    function render() {
        items.replaceChildren();
        let total = 0;
        let count = 0;
        cart.forEach((item, key) => {
            total += item.price * item.quantity;
            count += item.quantity;
            const row = document.createElement('div');
            row.className = 'order-item';
            const heading = document.createElement('h3');
            heading.textContent = item.name;
            const detail = document.createElement('p');
            detail.textContent = `${item.size} · ${item.temperature} · ${money(item.price)}`;
            const controls = document.createElement('div');
            controls.className = 'quantity-row';
            const stepper = document.createElement('div');
            stepper.className = 'stepper';
            const quantity = document.createElement('span');
            quantity.textContent = item.quantity;
            const minus = document.createElement('button');
            minus.type = 'button';
            minus.textContent = '−';
            minus.setAttribute('aria-label', `Decrease ${item.name}, ${item.size}, ${item.temperature}`);
            minus.addEventListener('click', () => { if (--item.quantity === 0) cart.delete(key); render(); });
            const plus = document.createElement('button');
            plus.type = 'button';
            plus.textContent = '+';
            plus.disabled = item.quantity >= 20;
            plus.setAttribute('aria-label', `Increase ${item.name}, ${item.size}, ${item.temperature}`);
            plus.addEventListener('click', () => { if (item.quantity < 20) item.quantity++; render(); });
            stepper.append(minus, quantity, plus);
            const price = document.createElement('strong');
            price.textContent = money(item.price * item.quantity);
            controls.append(stepper, price);
            row.append(heading, detail, controls);
            items.append(row);
        });
        if (!cart.size) items.innerHTML = emptyMarkup;
        document.getElementById('item-count').textContent = count;
        document.getElementById('subtotal').textContent = money(total);
        document.getElementById('total').textContent = money(total);
        checkout.disabled = count === 0;
        return total;
    }

    document.querySelectorAll('.coffee-card').forEach(card => {
        const size = card.querySelector('.size-select');
        size.addEventListener('change', () => {
            card.querySelector('.coffee-price').textContent = money(Number(card.dataset.price) + Number(size.value));
        });
        card.querySelector('.add-button').addEventListener('click', () => {
            const temperature = card.querySelector('.temperature-select').value;
            const sizeName = size.value === '0' ? 'Regular' : 'Large';
            const key = `${card.dataset.name}|${sizeName}|${temperature}`;
            const existing = cart.get(key);
            if (existing && existing.quantity >= 20) {
                status.textContent = 'You can add up to 20 cups of each selection.';
                return;
            }
            if (existing) existing.quantity++;
            else cart.set(key, { name: card.dataset.name, size: sizeName, temperature, price: Number(card.dataset.price) + Number(size.value), quantity: 1 });
            render();
            status.textContent = `${sizeName} ${temperature.toLowerCase()} ${card.dataset.name} added to your order.`;
        });
    });

    checkout.addEventListener('click', () => {
        if (!cart.size) return;
        const recap = document.getElementById('confirmation-items');
        recap.replaceChildren();
        cart.forEach(item => {
            const line = document.createElement('li');
            line.textContent = `${item.quantity} × ${item.name} (${item.size}, ${item.temperature}) — ${money(item.price * item.quantity)}`;
            recap.append(line);
        });
        document.getElementById('confirmation-total').textContent = money(render());
        dialog.showModal();
    });
    document.getElementById('close-confirmation').addEventListener('click', () => dialog.close());
});
