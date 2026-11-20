document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('drinkModal');
    const modalImg = document.getElementById('modalImg');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    const modalNotes = document.getElementById('modalNotes');
    const closeBtn = document.getElementById('modalClose');
    const buttons = document.querySelectorAll('.details-btn');

    function openModal(button) {
        modalImg.src = button.dataset.img;
        modalImg.alt = button.dataset.title;
        modalTitle.textContent = button.dataset.title;
        modalDesc.textContent = button.dataset.desc;
        modalNotes.textContent = button.dataset.notes;
        modal.classList.add('open');
    }

    function closeModal() {
        modal.classList.remove('open');
    }

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            openModal(button);
        });
    });

    closeBtn.addEventListener('click', closeModal);

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });
});