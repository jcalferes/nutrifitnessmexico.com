$(document).ready(function () {
    $("#vision").click(function () {
        $("#contenedor").load("vision.php", function () {
            $("#tablaVision").load("dameInformacionVision.php");
             $('#btnActualizarVision').attr("disabled", true);
        });
    });
});
function dameVision() {
    $("#txtVision").val($("#sVision").text());
    $('#btnActualizarVision').attr("disabled", false);
}

function actualizarVision() {
    var informacion = "info=" + $("#txtVision").val();
    $.get("actualizarVision.php", informacion, function (respuesta) {
        $("#txtVision").val("");
         $("#tablaVision").load("dameInformacionVision.php");
        alertify.success(respuesta);
        $('#btnActualizarVision').attr("disabled", true);
    });
}