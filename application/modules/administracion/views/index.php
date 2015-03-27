<?php echo $this->load->view('cabecera'); ?>

					<div  class="cuadrobotones">
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>administracion/index/materiales">
                                        <span class="modernpics newline">i</span>
                                        <span class="label label-success">Materiales</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>administracion/index/productos">
                                        <span class="modernpics newline">u</span>
                                        <span class="label label-success">Productos</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>administracion/index/proveedores">
                                        <span class="modernpics newline">f</span>
                                        <span class="label label-success">Proveedores</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>administracion/index/clientes">
                                        <span class="modernpics newline">k</span>
                                        <span class="label label-success">Clientes</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>administracion/usuarios">
                                        <span class="modernpics newline">g</span>
                                        <span class="label label-success">Usuarios</span>
                                        </a>
                                    </span>
                                </div>
                    </div>

<?php echo $this->load->view('pie'); ?>