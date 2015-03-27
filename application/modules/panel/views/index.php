<?php echo $this->load->view('cabecera'); ?>

					<div  class="cuadrobotones">
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>reporte/index">
                                        <span class="modernpics newline">5</span>
                                        <span class="label label-success">Reporte</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>administracion/index">
                                        <span class="modernpics newline">(</span>
                                        <span class="label label-success">Administración</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>produccion/index">
                                        <span class="modernpics newline">c</span>
                                        <span class="label label-success">Producción</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>kardex/index">
                                        <span class="modernpics newline">3</span>
                                        <span class="label label-success">Kardex</span>
                                        </a>
                                    </span>
                                </div>
                    </div>

<?php echo $this->load->view('pie'); ?>