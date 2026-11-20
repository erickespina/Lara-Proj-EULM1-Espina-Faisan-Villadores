document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('coffeeSearch');
    const status = document.getElementById('coffee-search-status');
    if (!input || !status) return;
    const clear = document.getElementById('coffee-search-clear');
    const empty = document.getElementById('coffee-search-empty');
    const normalize = text => text.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().trim();
    const coffees = Array.from(document.querySelectorAll('.order-page .coffee-card'), card => ({
        card,
        text: normalize(`${card.dataset.name} ${card.querySelector('.card-content > p').textContent} ${card.querySelector('.drink-label').textContent}`),
    }));

    function filterCoffees() {
        const words = normalize(input.value).split(/\s+/).filter(Boolean);
        let count = 0;
        coffees.forEach(({ card, text }) => {
            card.hidden = !words.every(word => text.includes(word));
            if (!card.hidden) count++;
        });
        clear.hidden = input.value.length === 0;
        empty.hidden = count !== 0;
        status.textContent = words.length
            ? `${count} ${count === 1 ? 'coffee matches' : 'coffees match'} your search.`
            : `${coffees.length} coffees to explore. Use the search bar above to find a favorite.`;
    }

    input.addEventListener('input', filterCoffees);
    input.form.addEventListener('submit', event => {
        event.preventDefault();
        filterCoffees();
        document.getElementById('coffee-menu').scrollIntoView({ block: 'start' });
    });
    clear.addEventListener('click', () => {
        input.value = '';
        const url = new URL(window.location.href);
        url.searchParams.delete('q');
        window.history.replaceState(null, '', url);
        filterCoffees();
        input.focus();
    });
    filterCoffees();
});
