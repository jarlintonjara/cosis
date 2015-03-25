<?php echo $this->load->view('cabecera'); ?>

					<div class="cuadrobotones" style=" margin-right: 290px;">

                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>index.php/kardex/index/detalle">
                                        <span class="modernpics newline">5</span>
                                        <span class="label label-info">Detalle</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>index.php/kardex/index/salida">
                                        <span class="modernpics newline">]</span>
                                        <span class="label label-warning">Salida</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="span1 botones">
                                    <span class="aqua-shortcut text-align-center">
                                        <a href="<?php echo base_url();?>index.php/kardex/index/ingreso">
                                        <span class="modernpics newline">[</span>
                                        <span class="label label-important">Ingreso</span>
                                        </a>
                                    </span>
                                </div>

                    </div>

<?php echo $this->load->view('pie'); ?>