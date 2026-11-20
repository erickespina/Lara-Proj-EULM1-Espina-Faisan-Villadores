document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.home-carousel');
    if (!carousel) return;
    const slides = [...carousel.querySelectorAll('.home-slide')];
    const dots = [...carousel.querySelectorAll('[data-slide]')];
    const controls = carousel.querySelector('.home-carousel-controls');
    const pauseButton = carousel.querySelector('.home-carousel-pause');
    const status = carousel.querySelector('.home-carousel-status');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let index = 0;
    let paused = reducedMotion.matches;
    let timer;

    function show(next, announce = false) {
        index = (next + slides.length) % slides.length;
        slides.forEach((slide, i) => { slide.hidden = i !== index; });
        dots.forEach((dot, i) => {
            if (i === index) dot.setAttribute('aria-current', 'true');
            else dot.removeAttribute('aria-current');
        });
        if (announce) status.textContent = 'Drink ' + (index + 1) + ' of ' + slides.length;
    }

    function schedule() {
        window.clearInterval(timer);
        pauseButton.textContent = paused ? 'Play' : 'Pause';
        if (paused || document.hidden || carousel.matches(':hover') || carousel.contains(document.activeElement)) return;
        timer = window.setInterval(() => show(index + 1), 5000);
    }

    carousel.querySelectorAll('[data-direction]').forEach(button => {
        button.addEventListener('click', () => {
            show(index + Number(button.dataset.direction), true);
            schedule();
        });
    });
    dots.forEach(button => button.addEventListener('click', () => {
        show(Number(button.dataset.slide), true);
        schedule();
    }));
    pauseButton.addEventListener('click', () => { paused = !paused; schedule(); });
    carousel.addEventListener('mouseenter', schedule);
    carousel.addEventListener('mouseleave', schedule);
    carousel.addEventListener('focusin', schedule);
    carousel.addEventListener('focusout', () => window.setTimeout(schedule, 0));
    document.addEventListener('visibilitychange', schedule);
    reducedMotion.addEventListener('change', () => { paused = reducedMotion.matches; schedule(); });
    controls.hidden = false;
    show(0);
    schedule();
});
