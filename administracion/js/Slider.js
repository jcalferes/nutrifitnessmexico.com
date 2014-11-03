$(document).ready(function () {
    $("#slider").click(function () {
        $("#contenedor").load("Slider.php", function () {
            $("#tablaSlider").load("dameImagenesSlider.php", function () {
                jQuery(".gallery-img-link").prettyPhoto({
                    overlay_gallery: false, social_tools: false
                });
            });
        });
    });

    $(".messages").hide();
    //queremos que esta variable sea global
    var fileExtension = "";
});

//como la utilizamos demasiadas veces, creamos una función para 
//evitar repetición de código
function showMessage(message) {
    $(".messages").html("").show();
    $(".messages").html(message);
}
//función que observa los cambios del campo file y obtiene información
function cambiar() {
    //obtenemos un array con los datos del archivo
    var file = $("#imagen")[0].files[0];
    //obtenemos el nombre del archivo
    var fileName = file.name;
    //obtenemos la extensión del archivo
    fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
    //obtenemos el tamaño del archivo
    var fileSize = file.size;
    //obtenemos el tipo de archivo image/png ejemplo
    var fileType = file.type;
    //mensaje con la información del archivo
    showMessage("<span class='info'>Archivo para subir: " + fileName + ", peso total: " + fileSize + " bytes.</span>");
}



//comprobamos si el archivo a subir es una imagen
//para visualizarla una vez haya subido
function isImage(extension)
{
    switch (extension.toLowerCase())
    {
        case 'jpg':
        case 'gif':
        case 'png':
        case 'jpeg':
            return true;
            break;
        default:
            return false;
            break;
    }
}


function subirImagen() {
    //información del formulario
    var formData = new FormData($(".formulario")[0]);
    var message = "";
    //hacemos la petición ajax  
    $.ajax({
        url: 'upload.php',
        type: 'POST',
        // Form data
        //datos del formulario
        data: formData,
        //necesario para subir archivos via ajax
        cache: false,
        contentType: false,
        processData: false,
        //mientras enviamos el archivo
        beforeSend: function () {
            message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
            showMessage(message);
        },
        //una vez finalizado correctamente
        success: function (data) {
            message = $("<span class='success'>La imagen ha subido correctamente.</span>");
            alertify.success("Imagen agregada Exitosamente !!");
            showMessage(message);
            if (isImage(fileExtension))
            {
                $("#tablaSlider").load("dameImagenesSlider.php", function () {
                    jQuery(".gallery-img-link").prettyPhoto({
                        overlay_gallery: false, social_tools: false
                    });
                });
            }
        },
        //si ha ocurrido un error
        error: function () {
            message = $("<span class='error'>Ha ocurrido un error.</span>");
            showMessage(message);
        }
    });
}



function eliminarImagen(imagen) {
    var informacion = "info=" + imagen;
    $.get("eliminarImagenSlider.php", informacion, function () {
        $("#tablaSlider").load("dameImagenesSlider.php", function () {
            jQuery(".gallery-img-link").prettyPhoto({
                overlay_gallery: false, social_tools: false
            });
        });
        alertify.success("Imagen Eliminada exitosamente");
    });
}