
document.addEventListener("DOMContentLoaded", function () {

    const readMoreBtn = document.getElementById("readMoreBtn");
    const extraStory = document.getElementById("extraStory");

    if (readMoreBtn && extraStory) {

        readMoreBtn.addEventListener("click", function () {

            if (extraStory.hidden) {

                extraStory.hidden = false;
                readMoreBtn.textContent = "Read Less −";

            } else {

                extraStory.hidden = true;
                readMoreBtn.textContent = "Read More +";

            }

        });

    }

});
