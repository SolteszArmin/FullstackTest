<div class="row h-100 justify-content-center">
	<div class="col-4">
		<div class="card login">
			<div class="login card-header "></div>
			<div class="login card-body">
				<form method="POST" action="backend/LoginProcess.php">
					<div class="form-group">
						<div class="col-md-12">
							<p class="login_text">Please Sign in</p>
							<label class="login_text" for="username">User name:</label>
							<input type="text" class="login form-control" id="username" name="username">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="login_text" for="password">Password:</label>
							<input type="password" class="login form-control" id="password" name="password">
						</div>
					</div>
					<div class="form-group">
						<div class="row h-100 justify-content-md-center">
							<input class="login login_text btn btn-primary" type="submit" value="ENTER">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-4 text-center"><?php 
					if (@$_GET['error']==true) 
					{
						echo '
				<p class="error">'.$_GET["error"].'</p>';
					}?>
	</div>
</div>