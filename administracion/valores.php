<h4>Valores</h4>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- Checkout Form -->
        <div class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-md-2 control-label">Valores :</label>
                <div class="col-md-8">
                    <textarea class="form-control" rows="10" id="txtValores" >
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-md-2 control-label"></label>
                <div class="col-md-8">
                    <input type="submit" 
                           class="btn btn-primary col-lg-3" 
                           value="Actualizar Valores"
                           title="Valores"
                           id="btnActualizarValores"
                           onclick="actualizarValores();"/>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table table-hover"
       id="tablaValores">
</table>