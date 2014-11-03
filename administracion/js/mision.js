$(document).ready(function () {
    $("#mision").click(function () {
        $("#contenedor").load("mision.php", function () {
            $("#txtMision").val("");
            $("#tablaMision").load("dameInformacionMision.php");
        });
    });
});


function dameMision() {
    $("#textMision").val($("#sMision").text());
    $('#btnActualizar').attr("disabled", false);
}

function actualizar() {
    var informacion = "info=" + $("#textMision").val();
    $.get("actualizarMision.php", informacion, function (respuesta) {
        $("#textMision").val("");
        $("#tablaMision").load("dameInformacionMision.php");
        alertify.success(respuesta);
        $('#btnActualizar').attr("disabled", true);
    });
}