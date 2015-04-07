<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login to Cosys</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">

  </head>
  <body>
<div class="login-body">
    <article class="container-login center-block">
		<section>
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li class="active"><a href="#login-access">Accesso</a></li>
				<li><a href="#">sadfsdf</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login-access" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i> Accesso</h2>
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="login/new_user">
						<div class="form-group ">
							<label for="login" class="sr-only">Usuario</label>
								<input type="text" class="form-control" name="username" id="login_value" 
									placeholder="Usuario" tabindex="1" value="" />
						</div>
						<div class="form-group ">
							<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Password" value="" tabindex="2" />
						</div>
						<div class="form-group ">
						<input type="hidden" name="token" value="<?=$token?>">
						</div>

						<div class="checkbox">
								<label class="control-label" for="remember_me">
									<input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" /> Recordarme
								</label>
						</div>
						<br/>
						<div class="form-group ">
								<button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-primary">Entra</button>
						</div>
					</form>			
				</div>
			</div>
		</section>
	</article>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>