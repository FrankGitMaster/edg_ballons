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
        include('funciones/redirect_index.php');
        if (isset($_GET['categoria'])) {
            $categoria = $_GET['categoria'];
        } else {
            $categoria = "default";
        }
        $resultadoProductos = getProductData($con, $categoria);
        ?>
        <section id="section_productos">
            <h1 class="section_name"><?php echo $categoria ?></h1>
            <div class="products_row row align-items-center">
                <?php while ($dataProduct = mysqli_fetch_array($resultadoProductos)) { ?>
                    <div class="col-6 col-md-3 mt-5 text-center Products">
                        <div class="card" style="max-height: 400px !important; min-height: 400px !important;">
                            <div>
                                <img class="card-img-top" src="<?php echo $dataProduct["foto1"]; ?>" alt="<?php echo $dataProduct['nameProd']; ?>" style="max-width: 200px;">
                            </div>
                            <div class=" card-body text-center">
                                <h5 class="card-title card_title"><?php echo $dataProduct['nameProd']; ?></h5>
                                <hr>
                                <p class="card-text p_puntos ">
                                    $ <?php echo number_format($dataProduct['precio'], 0, '', '.'); ?>
                                </p>
                            </div>
                            <a href="detallesArticulo.php?idProd=<?php echo $dataProduct["prodId"]; ?>" class="red_button btn_puntos" title="Ver <?php echo $dataProduct['nameProd']; ?>">
                                Ver Producto
                                <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <?php include('includes/js.html'); ?>
    </body>
</html>