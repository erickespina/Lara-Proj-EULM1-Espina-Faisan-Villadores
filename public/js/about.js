
document.addEventListener("DOMContentLoaded", function () {

    const readMoreBtn = document.getElementById("readMoreBtn");
    const extraStory = document.getElementById("extraStory");

    if (readMoreBtn && extraStory) {

        readMoreBtn.addEventListener("click", function () {

            const isHidden = extraStory.hidden;

            extraStory.hidden = !isHidden;

            if (isHidden) {
                readMoreBtn.textContent = "Read Less −";
            } else {
                readMoreBtn.textContent = "Read More +";
            }

        });

    }

});
