$(document).ready(function () {
    $("#btnLogin").click(function () {
        var usua = $("#txtUsuario").val();
        var pass = $("#txtPass").val();
        if (usua == "" || pass == "") {
            alertify.error("Todos los campos son obligatorios");
        }
        else {
            var info = "usua=" + usua + "&pass=" + pass;
            $.get("verificarLogin.php", info, function (respuesta) {
                if (respuesta == 1) {
                    alertify.success("Bienvenido");
                    window.location.href = "menu.php";
                }
                else if (respuesta == 0) {
                    alertify.error("Usuario o Pass Incorrectos");
                }
                else {
                    alertify.error(respuesta);
                }
            });

        }
    });
});