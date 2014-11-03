$(document).ready(function () {
    $("#valores").click(function () {
        $("#contenedor").load("valores.php", function () {
            $("#tablaValores").load("dameInformacionValores.php", function () {
                $('#btnActualizarValores').attr("disabled", true);
            });
        });
    });

});

function dameValores() {
    $("#txtValores").val($("#sValores").text());
    $('#btnActualizarValores').attr("disabled", false);
}

function actualizarValores() {
    var informacion = "info=" + $("#txtValores").val();
    $.get("actualizarValores.php", informacion, function (respuesta) {
        $("#txtValores").val("");
        $("#tablaValores").load("dameInformacionValores.php");
        alertify.success(respuesta);
        $('#btnActualizarValores').attr("disabled", true);
    });
}