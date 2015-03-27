<?php echo $this->load->view('cabecera'); ?>
<div class="aqua-container">

        <div class="span1">
            <a href="<?php echo base_url();?>administracion/usuarios" class="aqua-shortcut text-align-center">
                <span class="modernpics newline">(</span>
                <span class="label label-info">Administrar</span>
            </a>
        </div>
        <div class="clear"></div>
</div>

    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Creación de Usuarios<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
    <div class="aqua-panel-content">

<form class="form-vertical" id="user-form" action="http://aquasite.pl/aquablue/user/create" method="post">
                    <div class="span3 inputcabecera">
                    <div class="input-prepend">
                        <span class="add-on">
                            <span class=""><b>Usuario</b></span>
                        </span>
                        <input name="Form[prepend]" id="Form_prepend" type="text">
                    </div>
                </div>

                <div class="span3 inputcabecera">
                    <div class="input-prepend">
                        <span class="add-on">
                            <span class=""><b>Contraseña</b></span>
                        </span>
                        <input name="Form[prepend]" id="Form_prepend" type="text">
                    </div>
                </div>

                <div class="span2 inputcabecera">
                    <div class="input-prepend">
                        <span class="add-on">
                            <span class=""><b>Perfil</b></span>
                        </span>
                        <select name="Form[dropdown]" id="Form_dropdown">
                            <option value="0">Something ...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="span3 inputcabecera">
                    <div class="input-prepend">
                        <span class="add-on">
                            <span class=""><b>Descripción</b></span>
                        </span>
                        <input name="Form[prepend]" id="Form_prepend" type="text">
                    </div>
                </div>


<div class="form-actions span7" style="text-align: center;">
        <button class="btn btn-primary btn-large" type="submit" name="yt0">Create</button>  </div>
</form>
</div>
</div>

<?php echo $this->load->view('pie'); ?>
