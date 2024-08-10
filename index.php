<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="assets/images/icon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
        <link rel="stylesheet" href="assets/styles/loader.css">
        <title>EDG BALLONS</title>
    </head>

    <body>
        <div class="page-loading active">
            <div class="page-loading-inner">
                <div class="page-spinner"></div>
                <span>cargando...</span>
            </div>
        </div>
        <?php
        include('funciones/funciones_tienda.php');
        include('header.php');
        ?>
        <section id="cover_page">
            <img src="assets/images/banner_principal.jpg" alt="">
            <button id="btn_ver_mas">ver m&aacute;s</button>
        </section>
        <section id="nosotros_page">
            <img src="assets/images/banner_principal.jpg" alt="">
        </section>
        <section id="section_categorias">
            <h1 class="section_name">productos</h1>
            <div class="products_row row align-items-center">
                <div id="decoracion" class="text-center Products" onclick="seleccionar_categoria(this)">
                    <div class="card">
                        <div class=" card-body text-center">
                            <h5 class="card-title card_title">Decoraci&oacute;n</h5>
                        </div>
                        <div>
                            <img class="card-img-top" src="assets/images/categoria_1.webp" alt="" style="max-width: 200px;">
                        </div>
                    </div>
                </div>
                <div id="globos" class="text-center Products" onclick="seleccionar_categoria(this)">
                    <div class="card">
                        <div class=" card-body text-center">
                            <h5 class="card-title card_title">globos</h5>
                        </div>
                        <div>
                            <img class="card-img-top" src="assets/images/categoria_1.webp" alt="" style="max-width: 200px;">
                        </div>
                    </div>
                </div>
                <div id="variedades" class="text-center Products" onclick="seleccionar_categoria(this)">
                    <div class="card">
                        <div class=" card-body text-center">
                            <h5 class="card-title card_title">variedades</h5>
                        </div>
                        <div>
                            <img class="card-img-top" src="assets/images/categoria_1.webp" alt="" style="max-width: 200px;">
                        </div>
                    </div>
                </div>
            </div>			
        </section>
        <?php include('includes/js.html'); ?>
        <script src="assets/js/scroll_header.js"></script>

    </body>

</html>