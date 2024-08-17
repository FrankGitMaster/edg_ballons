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
        <title>EDG Ballons</title>
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
                            <img class="card-img-top" src="assets/images/categoria_1.png" alt="" style="max-width: 200px;">
                        </div>
                    </div>
                </div>
                <div id="globos" class="text-center Products" onclick="seleccionar_categoria(this)">
                    <div class="card">
                        <div class=" card-body text-center">
                            <h5 class="card-title card_title">globos</h5>
                        </div>
                        <div>
                            <img class="card-img-top" src="assets/images/categoria_2.png" alt="" style="max-width: 200px;">
                        </div>
                    </div>
                </div>
                <div id="variedades" class="text-center Products" onclick="seleccionar_categoria(this)">
                    <div class="card">
                        <div class=" card-body text-center">
                            <h5 class="card-title card_title">variedades</h5>
                        </div>
                        <div>
                            <img class="card-img-top" src="assets/images/categoria_3.png" alt="" style="max-width: 200px;">
                        </div>
                    </div>
                </div>
            </div>	
        </section>
        <section id="section_contacto">
            <div id="means_contact">
                <h1 class="section_name">cont&aacute;ctanos</h1>
                <div id="icons">
                    <a href="https://web.whatsapp.com/" target="_blank">
                        <img src="assets/images/icon_whatsaap.png" alt="Whatsaap"/>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <img src="assets/images/icon_instagram.png" alt="Whatsaap"/>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="assets/images/icon_facebook.png" alt="Whatsaap"/>
                    </a>
                    <a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=158&ct=1723917997&rver=7.0.6738.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26cobrandid%3dab0455a0-8d03-46b9-b18b-df2f57b9e44c%26culture%3des-co%26country%3dco%26RpsCsrfState%3d63726fb1-7dc3-9fe4-c416-5b3024d03118&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=ab0455a0-8d03-46b9-b18b-df2f57b9e44c" target="_blank">
                        <img src="assets/images/icon_correo.png" alt="Whatsaap"/>
                    </a>
                </div>
                <div id="aditional_contact_info">
                    <p>Solucionamos inquietudes en <strong>WhatsApp: Lunes a viernes</strong> de 8:00am a 5:00pm <strong>sabados</strong> de 9:000am a 12:00pm</p>
                </div>
                <img id="logo_contacto" src="assets/images/logo.png" alt="Logo EDG Ballons"/>
            </div>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.39472090616!2d-74.2726252729899!3d4.648620643478048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1723312161269!5m2!1ses!2sco"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <?php include('includes/js.html'); ?>
        <script src="assets/js/scroll_header.js"></script>
    </body>
</html>