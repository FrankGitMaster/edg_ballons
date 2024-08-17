<?php

// Captura la URL actual
$currentUrl = $_SERVER['REQUEST_URI'];
if (strpos($currentUrl, 'index.php') == false) {
    ?>
    <script>
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (e) {
                // Evita que el enlace se siga si estamos en la página de categorías
                e.preventDefault();
                // Redirige a la página principal
                window.location.href = 'index.php'; // Cambia 'index.php' por la URL de tu página principal
            });
        });
    </script>
    <?php

}
?>