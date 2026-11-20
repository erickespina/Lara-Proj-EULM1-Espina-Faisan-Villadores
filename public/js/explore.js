document.addEventListener('DOMContentLoaded', function () {

    // ---------- MENU DATA ----------
    const fallbackImg = 'https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600';

    const drinks = [
        { name: 'Americano', price: 89, flavors: ['strong'],
          desc: 'A coffee drink typically made from equal parts espresso and water.',
          img: 'https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600' },
        { name: 'Black Coffee', price: 79, flavors: ['strong'],
          desc: 'Freshly brewed coffee made from carefully selected coffee beans.',
          img: 'https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600' },
        { name: 'Mocha', price: 99, flavors: ['sweet'],
          desc: 'A coffee drink known for its chocolate sweetness and rich flavor.',
          img: 'https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600' },
        { name: 'Breve', price: 99, flavors: ['sweet'],
          desc: 'A coffee drink made with espresso and steamed half-and-half.',
          img: 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600' },
        { name: 'Iced Caramel Macchiato', price: 89, flavors: ['sweet'],
          desc: 'A creamy iced coffee with milk, espresso, and caramel flavor.',
          img: '/images/products/iced-caramel-macchiato.png' },
        { name: 'Don Matchatos', price: 89, flavors: ['matcha'],
          desc: 'A refreshing layered drink featuring creamy milk and matcha.',
          img: '/images/products/don-matchatos.png' },
        { name: 'Donya Berry', price: 89, flavors: ['fruity'],
          desc: 'A refreshing berry drink with a sweet and fruity flavor.',
          img: '/images/products/donya-berry.png' },
        { name: 'Don Darko', price: 89, flavors: ['strong'],
          desc: 'A rich, creamy iced drink with a deep coffee-inspired flavor.',
          img: '/images/products/don-darko.png' },
        { name: 'Matcha Berry', price: 99, flavors: ['matcha', 'fruity'],
          desc: 'A colorful combination of refreshing matcha and sweet berry flavor.',
          img: '/images/products/matcha-berry.png' },
        { name: 'Black Forest', price: 99, flavors: ['sweet', 'fruity'],
          desc: 'A rich chocolate-inspired drink with creamy and fruity layers.',
          img: '/images/products/black-forest.png' }
    ];

    // fills a result card with one drink
    function showDrink(card, drink) {
        const img = card.querySelector('.dr-img');
        img.onerror = function () {
            img.onerror = null;
            img.src = fallbackImg;
        };
        img.src = drink.img;
        img.alt = drink.name;

        card.querySelector('.dr-name').textContent = drink.name;
        card.querySelector('.dr-desc').textContent = drink.desc;
        card.querySelector('.dr-price').textContent = '₱' + drink.price;
        card.querySelector('.dr-tag').textContent = drink.flavors.join(' · ');
        card.hidden = false;
    }

    function randomItem(list) {
        return list[Math.floor(Math.random() * list.length)];
    }

    // ---------- 1. FIND YOUR DRINK ----------
    const answers = {};
    const rows = document.querySelectorAll('.option-row');
    const findBtn = document.getElementById('findBtn');
    const finderError = document.getElementById('finderError');
    const finderResult = document.getElementById('finderResult');

    rows.forEach(function (row) {
        const question = row.dataset.question;
        row.querySelectorAll('.option-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                row.querySelectorAll('.option-btn').forEach(function (b) {
                    b.classList.remove('selected');
                });
                btn.classList.add('selected');
                answers[question] = btn.dataset.value;
                finderError.hidden = true;
            });
        });
    });

    findBtn.addEventListener('click', function () {
        if (!answers.flavor || !answers.budget) {
            finderError.hidden = false;
            return;
        }

        const matches = drinks.filter(function (drink) {
            return drink.flavors.includes(answers.flavor) &&
                   drink.price <= Number(answers.budget);
        });

        if (matches.length === 0) {
            finderError.textContent = 'No match found. Try another budget or flavor.';
            finderError.hidden = false;
            finderResult.hidden = true;
            return;
        }

        showDrink(finderResult, randomItem(matches));
    });

    // ---------- 2. DRINK OF THE DAY ----------
    const dayResult = document.getElementById('dayResult');
    const surpriseBtn = document.getElementById('surpriseBtn');

    let dayIndex = new Date().getDate() % drinks.length;
    showDrink(dayResult, drinks[dayIndex]);

    surpriseBtn.addEventListener('click', function () {
        let next;
        do {
            next = Math.floor(Math.random() * drinks.length);
        } while (next === dayIndex);
        dayIndex = next;
        showDrink(dayResult, drinks[dayIndex]);
    });

    // ---------- 3. COFFEE GUIDE ----------
    document.querySelectorAll('.guide-q').forEach(function (question) {
        question.addEventListener('click', function () {
            const answer = question.nextElementSibling;
            const isOpen = !answer.hidden;
            answer.hidden = isOpen;
            question.setAttribute('aria-expanded', String(!isOpen));
        });
    });
});