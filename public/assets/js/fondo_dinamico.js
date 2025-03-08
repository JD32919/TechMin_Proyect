document.addEventListener("DOMContentLoaded", function () {
    const images = JSON.parse(document.getElementById('image-data').textContent); 
    const imageContainer = document.getElementById("background-img");

    function changeImage() {
        let randomIndex = Math.floor(Math.random() * images.length);

        // Animación de desvanecimiento con GSAP
        gsap.to(imageContainer, { opacity: 0, duration: 0.8, onComplete: function () {
            imageContainer.style.backgroundImage = `url('${images[randomIndex]}')`;
            gsap.to(imageContainer, { opacity: 1, duration: 0.8 });
        }});
    }

    setInterval(changeImage, 5000); // Cambia la imagen cada 5 segundos

});

