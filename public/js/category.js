document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('#categoryGrid .product-card');
    const noResults = document.getElementById('noResults');

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            const filter = button.dataset.filter;

            buttons.forEach(function (b) { b.classList.remove('active'); });
            button.classList.add('active');

            let visible = 0;
            cards.forEach(function (card) {
                const categories = card.dataset.category.split(' ');
                const show = filter === 'all' || categories.includes(filter);
                card.classList.toggle('hide', !show);
                if (show) visible++;
            });

            noResults.style.display = visible === 0 ? 'block' : 'none';
        });
    });
});