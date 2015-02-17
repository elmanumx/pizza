

<div id="page-inner">
            
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class=" panel panel-primary" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingresar</h3>
                    </div>
                    <div class="panel-body">
                            <fieldset>
                                <div class="form-group">
                               <input type="text" id="valor" class="form-control input-lg">
                               </div>
                                <!-- Change this to a button or input when using this as a form -->
                               
                            <a class="btn btn-lg btn-success btn-block" onclick="verificar_mesero()">boton</a>

                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    
</div>

<div class="modal fade" id="idm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <h5>No se encuentra en la base de </h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modl-dialog -->
</div><!-- /.modal -->


<style>
#idm .modal-dialog { width:45%; margin-top:10%;}
</style>

