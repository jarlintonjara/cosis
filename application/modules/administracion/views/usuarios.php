<?php echo $this->load->view('cabecera'); ?>
<div class="aqua-container">
		<div class="span1">
		    <a href="<?php echo base_url();?>administracion/usuarios/crear" class="aqua-shortcut text-align-center">
		        <span class="modernpics newline">V</span>
		        <span class="label label-info">Crear Usuario</span>
		    </a>
		</div>

		<div class="clear"></div>

</div>


        <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Listado de Proveedores<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">

            <div id="user-grid" class="grid-view">
                <div class="clear">
                    <table class="items table table-striped table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>UserName</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Fecha</th>
                                <th>&nbsp;</th>
                            </tr>
                            <tr class="filters">
                                <td>
                                    <div class="filter-container">
                                        <input name="User[id]" type="text" />
                                    </div>
                                </td>
                                <td>
                                    <div class="filter-container">
                                        <input name="User[username]" type="text" />
                                    </div>
                                </td>
                                <td>
                                    <div class="filter-container">
                                        <input name="User[password]" type="text" maxlength="40" />
                                    </div>
                                </td>
                                <td>
                                    <div class="filter-container">
                                        <input name="User[email]" type="text" />
                                    </div>
                                </td>
                                <td>
                                    <div class="filter-container">
                                        <input name="User[create_time]" type="text" />
                                    </div>
                                </td>
                                <td>&nbsp;</td></tr>
                        </thead>
                        <tbody>
                        <tr class="odd">
                            <td>161</td>
                            <td>Raphaela</td>
                            <td>12345678</td>
                            <td>ratamiette@gmail.com</td>
                            <td>
                                
                            </td>
                            <td class="button-column">
                                <a data-toggle="modal" data-target="#myModalUpdate" title="Update" rel="tooltip"><i class="icon-pencil"></i></a> 
                                <a data-toggle="modal" data-target="#myModalDelete" title="Update" rel="tooltip"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>162</td>
                            <td>Chandrakanta</td>
                            <td>daskldaskldj</td>
                            <td>asdas@dssad.com</td>
                            <td>
                                
                            </td>
                            <td class="button-column">
                                <a data-toggle="modal" data-target="#myModalUpdate" title="Update" rel="tooltip"><i class="icon-pencil"></i></a> 
                                <a data-toggle="modal" data-target="#myModalDelete" title="Update" rel="tooltip"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>
         </div>
        </div>
    </div>
        <!-- MODAL UPDATE USUARIOS -->
    <div id="myModalUpdate" class="modal fade">
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
        <!-- END MODAL UPDATE USUARIOS -->

        <!-- MODAL DELETE USUARIOS -->
                <div id="myModalDelete" class="modal fade">
                    <div class="modal-header">
                        <a class="close" data-dismiss="modal">&times;</a>
                        <h4>Elimina al Usuario</h4>
                    </div>

                    <div class="modal-body">

                    </div>

                    <div class="modal-footer">
                        <a data-dismiss="modal" class="btn btn-danger" href="#">Si</a>                    
                        <a data-dismiss="modal" class="btn btn-success" href="#">Cancelar</a>                </div>

                    </div>
          <!-- END MODAL DELETE USUARIOS -->                  
        </div>

