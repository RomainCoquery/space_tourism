document.addEventListener('DOMContentLoaded', function () {
    var nameSection = document.querySelector('.main');

    nameSection.addEventListener('click', function (event) {
        // Vérifiez si le clic a été effectué sur un bouton
        if (event.target.classList.contains('button')) {
            var nameResult = event.target.dataset.name;

            // Affichez l'image et la div associées à la planète cliquée
            showResult(nameResult);
        }
    });
});

function showResult(nameResult) {
    var names = document.querySelectorAll('.description');
    var buttons = document.querySelectorAll('.button');
    var nameImages = document.querySelectorAll('.picture img');

    names.forEach(function (name) {
        if (name.dataset.name === nameResult) {
            name.classList.remove('hidden');
            name.classList.add('active');
        } else {
            name.classList.remove('active');
            name.classList.add('hidden');
        }
    });

    buttons.forEach(function (button) {
        if (button.dataset.name === nameResult) {
            button.classList.remove('hidden');
            button.classList.add('active');
        } else {
            button.classList.remove('active');
            button.classList.add('hidden');
        }
    });

    nameImages.forEach(function (image) {
        if (image.dataset.name === nameResult) {
            image.classList.remove('hidden');
            image.classList.add('active');
        } else {
            image.classList.remove('active');
            image.classList.add('hidden');
        }
    });
}
