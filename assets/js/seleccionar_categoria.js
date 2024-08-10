function seleccionar_categoria(elemento) {
    var id_categoria = $(elemento).attr("id");
    window.location.href = "categoria.php?categoria=" + id_categoria;
}