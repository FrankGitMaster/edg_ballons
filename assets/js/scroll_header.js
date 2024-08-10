const links = document.querySelectorAll(".nav-link");

links.forEach((item) => {
    item.addEventListener("click", () => {
        // Obtener el elemento de la sección objetivo
        let e = document.getElementById(item.getAttribute("data-link"));

        // Obtener la altura del elemento cuyo ID es 'header'
        let header_height = document.getElementById("header").offsetHeight;

        // Calcular la posición de la sección y sumarle 120px
        let offsetPosition = e.offsetTop - header_height;

        // Desplazar la página a la posición calculada
        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    });
});
