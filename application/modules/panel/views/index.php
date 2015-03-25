<?php echo $this->load->view('cabecera'); ?>

					<div  class="cuadrobotones">
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>index.php/reporte/index">
                                        <span class="modernpics newline">5</span>
                                        <span class="label label-success">Reporte</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>index.php/administracion/index">
                                        <span class="modernpics newline">(</span>
                                        <span class="label label-info">Administración</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>index.php/produccion/index">
                                        <span class="modernpics newline">c</span>
                                        <span class="label label-warning">Producción</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>index.php/kardex/index">
                                        <span class="modernpics newline">3</span>
                                        <span class="label label-important">Kardex</span>
                                        </a>
                                    </span>
                                </div>
                    </div>

<?php echo $this->load->view('pie'); ?>