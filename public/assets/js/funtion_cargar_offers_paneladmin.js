document.addEventListener('DOMContentLoaded', function () {
    const offersBtn = document.querySelector('#offers-link');
    const mainContent = document.querySelector('main');

    offersBtn.addEventListener('click', function (e) {
        e.preventDefault();
        fetch('/partial/offers')
            .then(response => response.text())
            .then(html => {
                mainContent.classList.add('fade-out');
                setTimeout(() => {
                    mainContent.innerHTML = html;
                    mainContent.classList.remove('fade-out');
                    mainContent.classList.add('fade-in');
                }, 300);
            })
            .catch(error => {
                console.error('Error loading offers:', error);
            });
    });
});