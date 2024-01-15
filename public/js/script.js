document.addEventListener('DOMContentLoaded', function () {
    showContent('moon');
});

function showContent(contentId) {
    var allContents = document.querySelectorAll('.content');
    allContents.forEach(function (content) {
        console.log("all hidden", content);
        content.classList.add('hidden');
    });

    var targetContent = document.getElementById(contentId);
    if (targetContent) {
        targetContent.classList.remove('hidden');
    }
}
