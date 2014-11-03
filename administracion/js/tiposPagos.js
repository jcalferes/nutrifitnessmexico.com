$(document).ready(function () {
    $("#tipoPagos").click(function () {
        $("#contenedor").load("tiposPagos.php", function () {
            $("#tablaTiposPagos").load("dameTiposPagos.php");
        });
    });
});