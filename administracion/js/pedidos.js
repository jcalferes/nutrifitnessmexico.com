$(document).ready(function () {
    $("#pedidos").click(function () {
        $("#contenedor").load("pedidos.php");
    });
});