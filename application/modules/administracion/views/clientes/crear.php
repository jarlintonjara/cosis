<?php echo $this->load->view('cabecera'); ?>
<div class="aqua-container">
<div class="span1">
    <a href="index.html" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Users</span>
    </a>
</div>
<div class="span1">
    <a href="admin.html" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Users</span>
    </a>
</div>


   <div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Create User<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">



<form class="form-vertical" id="user-form" action="http://aquasite.pl/aquablue/user/create" method="post">
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<div class="alert alert-block alert-error" id="user-form_es_" style="display:none"><p>Please fix the following input errors:</p>
<ul><li>dummy</li></ul></div>
	<label for="User_username" class="required">Username <span class="required">*</span></label><input class="span4" name="User[username]" id="User_username" type="text" /><span class="help-block error" id="User_username_em_" style="display: none"></span>
	<label for="User_password" class="required">Password <span class="required">*</span></label><input class="span4" name="User[password]" id="User_password" type="password" maxlength="40" /><span class="help-block error" id="User_password_em_" style="display: none"></span>
	<label for="User_email" class="required">Email <span class="required">*</span></label><input class="span4" name="User[email]" id="User_email" type="text" /><span class="help-block error" id="User_email_em_" style="display: none"></span>
	<label for="User_create_time">Create Time</label><input class="span4" name="User[create_time]" id="User_create_time" type="text" /><span class="help-block error" id="User_create_time_em_" style="display: none"></span>
	<label for="User_last_visit">Last Visit</label><input class="span4" name="User[last_visit]" id="User_last_visit" type="text" /><span class="help-block error" id="User_last_visit_em_" style="display: none"></span>
	<label for="User_status_id" class="required">Status <span class="required">*</span></label><input class="span4" name="User[status_id]" id="User_status_id" type="text" /><span class="help-block error" id="User_status_id_em_" style="display: none"></span>
	<div class="form-actions">
		<button class="btn btn-primary btn-large" type="submit" name="yt0">Create</button>	</div>

</form>        </div>
    </div>
</div>
<?php echo $this->load->view('pie'); ?>
