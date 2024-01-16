// document.addEventListener('DOMContentLoaded', function () {
//     showContent('moon');
// });

// function showContent(contentId) {
//     var allContents = document.querySelectorAll('.content');
//     allContents.forEach(function (content) {
//         content.classList.add('hidden');
//     });

//     var targetContent = document.getElementById(contentId);
//     if (targetContent) {
//         targetContent.classList.remove('hidden');
//     }
// }

document.addEventListener('DOMContentLoaded', function () {
    var planetSection = document.querySelector('.navbar');
    var buttons = planetSection.querySelectorAll('.button');

    buttons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            buttons.forEach(function (btn) {
                btn.classList.remove('active');
                btn.classList.add('hidden');
            });

            event.currentTarget.classList.remove('hidden');
            event.currentTarget.classList.add('active');
        });
    });
});







