<?php echo $this->load->view('cabecera'); ?>
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Orden de Producción<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
            <div class="aqua-panel-content">
            	<div class="span4 inputlarge">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>Cliente</b></span>
						</span>
						<select name="Form[dropdown]" id="Form_dropdown" style=" width: 310px;">
							<option value="0">Something ...</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>

				<div class="span4 inputlarge">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>Producto</b></span>
						</span>
						<select name="Form[dropdown]" id="Form_dropdown" style=" width: 310px;">
							<option value="0">Something ...</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>

            </div>

            <div class="aqua-panel-content">
            	<div class="btnagregar">
            	<a data-toggle="modal" data-target="#myModaladdMaterial" title="Update" rel="tooltip" class="btn btn-primary" href="#">Agregar Material</a> 
            	</div>
            </div>

            <div class="aqua-panel-content">
            	Lista de Materiales
            </div>

        <!-- MODAL ADDMATERIAL USUARIOS -->
    <div id="myModaladdMaterial" class="modal fade">
                    <div class="modal-header">
                        <a class="close" data-dismiss="modal">&times;</a>
                        <h4>Actualiza Datos del Usuario</h4>
                    </div>

                    <div class="modal-body">
                        <div class="aqua-panel modalupdate">
                            <div class="aqua-panel-header">
                                <i class="modernpics icons32">r</i><span class="panel-divider"></span>
                                <h2>Listado de Usuarios<span></span></h2>
                                <div class="aqua-panel-tabs-icons pull-right">
                                    <a href="#" class="minimize">--</a>
                                    <a href="#" class="modernpics maximize">v</a>
                                </div>
                            </div>
                            <div class="aqua-panel-content">
                                <div id="user-grid" class="grid-view">
                                    
                                    <div class="span2 inputcabecera">
                                        <div class="input-prepend">
                                            <span class="add-on">
                                            <span class=""><b>Periodo</b>
                                            </span>
                                            </span>
                                            <input name="Form[prepend]" id="Form_prepend" type="text">
                                        </div>
                                    </div>

                                    <div class="span2 inputcabecera">
                                        <div class="input-prepend">
                                            <span class="add-on">
                                            <span class=""><b>Periodo</b>
                                            </span>
                                            </span>
                                            <input name="Form[prepend]" id="Form_prepend" type="text">
                                        </div>
                                    </div>

                                    <div class="span2 inputcabecera">
                                        <div class="input-prepend">
                                            <span class="add-on">
                                            <span class=""><b>Periodo</b>
                                            </span>
                                            </span>
                                            <input name="Form[prepend]" id="Form_prepend" type="text">
                                        </div>
                                    </div>
                                    
                                                                        <div class="span2 inputcabecera">
                                        <div class="input-prepend">
                                            <span class="add-on">
                                            <span class=""><b>Periodo</b>
                                            </span>
                                            </span>
                                            <input name="Form[prepend]" id="Form_prepend" type="text">
                                        </div>
                                    </div>

                                                                        <div class="span2 inputcabecera">
                                        <div class="input-prepend">
                                            <span class="add-on">
                                            <span class=""><b>Periodo</b>
                                            </span>
                                            </span>
                                            <input name="Form[prepend]" id="Form_prepend" type="text">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a data-dismiss="modal" class="btn btn-primary" href="#">Guardar</a>                    
                        <a data-dismiss="modal" class="btn btn-success" href="#">Cancelar</a>                </div>

                    </div>
        </div>
        <!-- END MODAL ADDMATERIAL USUARIOS -->
	</div>
<?php echo $this->load->view('pie'); ?>