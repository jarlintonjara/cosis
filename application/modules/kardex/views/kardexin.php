<?php echo $this->load->view('cabecera'); ?>

    <div class="aqua-panel">
        <div class="aqua-panel-content">
            <form class="well form-horizontal" id="horizontalForm" action="http://aquasite.pl/aquablue/site/forms" method="post">
             <div id="content">
				
				<div class="span2 inputcabecera">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>Periodo</b></span>
						</span>
						<input name="Form[prepend]" id="Form_prepend" type="text">
					</div>
				</div>

				<div class="span4 inputlarge">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>Razon Social</b></span>
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

				<div class="span2 inputcabecera">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>RUC</b></span>
						</span>
						<input name="Form[prepend]" id="Form_prepend" type="text">
					</div>
				</div>

				<div class="span3 inputcabecera">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>Establecimiento</b></span>
						</span>
						<input name="Form[prepend]" id="Form_prepend" type="text">
					</div>
				</div>

				<div class="span3 inputcabecera">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>Cod. Existencia</b></span>
						</span>
						<input name="Form[prepend]" id="Form_prepend" type="text">
					</div>
				</div>

				<div class="span2 inputcabecera">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>Tipo</b></span>
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

				<div class="span3 inputcabecera">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>U. Medida</b></span>
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

				<div class="span2 inputcabecera">
					<div class="input-prepend">
						<span class="add-on">
							<span class=""><b>M.Eva</b></span>
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
				

            </form>
        </div>
    </div>

<?php echo $this->load->view('pie'); ?>