<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aquasite.pl/aquablue/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2015 22:03:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/a6a5c5a7/guiders-1.2.8.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/18cc69c8/css/themes/prettify.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/assets/78b1118/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/assets/340266a5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/assets/a6a5c5a7/guiders-1.2.8.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/assets/18cc69c8/js/prettify.js"></script>
<title>Sistema|Contabilidad de costos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    </head>
    <body>
        <header>
            <div id="aqua-header">
                <div class="aqua-container">
                    <a href="#" class="aqua-well-mini">
                        <h1 class="aqua-slogan">COSYS</h1>
                        <h2 class="aqua-slogan"><i>Sistema de contabilidad de costos</i></h2>
                    </a>
                    <div class="aqua-well-mini pull-right cajonuser" style="min-width: 90px;">
                        <div class="aqua-user">
                            <span class="aqua-user-name"> <?=$this->session->userdata('perfil')?></span>
                        </div>
                        <div class="btn-group">
                                <a href="#" class="btn btn-small dropdown-toggle" data-toggle="dropdown"> 
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?></li>
                                </ul>
                        </div>
                    </div>
                  
                    </div>
                </div>
            </div>
            <div  id="aqua-menu" data-offset-top="80" data-spy="affix" class="subnav navbar affix">

                <div class="aqua-container">
                    <a data-target="#collapse_2" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <ul id="yw2" class="nav">
                      <li class="active">
                        <a href="<?php echo base_url();?>panel/index">
                          <i class="icon-home icon-white"></i> 
                        </a>
                      </li>

                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <i class="icon-user icon-white icon-margin"></i> Kardex 
                          <span class="caret">
                          </span>
                        </a>
                        <ul id="yw3" class="dropdown-menu">
                          <li>
                            <a tabindex="-1" href="<?php echo base_url();?>kardex/index/ingreso">
                              <i class="icon-edit icon-margin">
                              </i> Ingreso
                            </a>
                          </li>
                          <li>
                            <a tabindex="-1" href="<?php echo base_url();?>kardex/index/salida">
                              <i class="icon-cog icon-margin"></i> Salida
                            </a>
                          </li>


                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">
                                <i class="icon-share-alt icon-margin">
                                    
                                </i> Detalles
                            </a>
                            <ul id="yw5" class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="<?php echo base_url();?>kardex/index/detallein">
                                        <i class="icon-share-alt icon-margin"></i> Ingreso
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo base_url();?>kardex/index/detalleou">
                                        <i class="icon-share-alt icon-margin">
                                            
                                        </i> Salida
                                    </a>
                                </li>
                            </ul>
                        </li>

                        </ul>
                      </li>

                      <li>
                        <a href="<?php echo base_url();?>produccion/index">
                          <i class="icon-list icon-white icon-margin"></i> Producción
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo base_url();?>administracion/index">
                          <i class="icon-pie-chart icon-white icon-margin"></i> Administración
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo base_url();?>reporte/index"><i class="icon-th icon-white icon-margin"></i> Reporte
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo base_url();?>"><i class="icon-picture icon-white icon-margin"></i> Otros
                        </a>
                      </li>
                      <li onclick="guiders.show(&quot;1&quot;)">
                        <a href="#">
                          <i class="icon-play-circle icon-white icon-margin"></i> Guide tour
                        </a>
                      </li>
                      
                </div>
            </div>
        </header>
        <div id="yw6"></div>
        

        
                    <div id="breadcrumbs">
                            <ul class="breadcrumbs breadcrumb"><li><a href="<?php echo base_url();?>panel/index">Home</a><span class="divider">/</span></li><li class="active">Kardex</li></ul><!-- breadcrumbs -->
                    </div>
