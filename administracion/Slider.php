<form enctype="multipart/form-data" class="formulario">

    <label>Subir un Archivo</label>
    <div class="alert alert-warning">
        <strong>Aviso.</strong>
        <br/>
        Toda imagen para el Slider debera tener las medidas de anchura de <strong>1920 px</strong> 
        y de altura <strong>900 px.</strong>
    </div>
    <input name="archivo" type="file" id="imagen" onchange="cambiar()"/>
    <br>
    <input type="button" 
           value="subir imagen" 
           onclick="subirImagen()"
           class="btn btn-primary"/>
    <div class="messages">
    </div>
    <div class="showImage">
    </div>
    <br>
    <br>
    <table class="table" id="tablaSlider">
        <thead>
        <th>Imagen</th>
        <th>Eliminar</th>
        </thead>
    </table>
</form>


<!--<script src="../js/jquery.js"></script>
<script src="js/Slider.js"></script>-->