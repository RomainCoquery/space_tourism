document.addEventListener('DOMContentLoaded', function () {
    var planetSection = document.querySelector('.main');

    planetSection.addEventListener('click', function (event) {
        // Vérifiez si le clic a été effectué sur un bouton
        if (event.target.classList.contains('button')) {
            var planetName = event.target.dataset.planet;

            // Affichez l'image et la div associées à la planète cliquée
            showPlanet(planetName);
        }
    });
});

function showPlanet(planetName) {
    var planets = document.querySelectorAll('.description');
    var buttons = document.querySelectorAll('.button');
    var planetImages = document.querySelectorAll('.picture img');

    planets.forEach(function (planet) {
        if (planet.dataset.planet === planetName) {
            planet.classList.remove('hidden');
            planet.classList.add('active');
        } else {
            planet.classList.remove('active');
            planet.classList.add('hidden');
        }
    });

    buttons.forEach(function (button) {
        if (button.dataset.planet === planetName) {
            button.classList.remove('hidden');
            button.classList.add('active');
        } else {
            button.classList.remove('active');
            button.classList.add('hidden');
        }
    });

    planetImages.forEach(function (image) {
        if (image.dataset.planet === planetName) {
            image.classList.remove('hidden');
            image.classList.add('active');
        } else {
            image.classList.remove('active');
            image.classList.add('hidden');
        }
    });
}
