<?php include("header.php")?>
		<div class="container">
			<div class="row">
				<h1 class="text-center">Login System</h1>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form action="loginAction.php" method="POST">
						<input type="text" class="form-control" placeholder="Enter username.." name="username" />
						<br/>
						<input type="password" class="form-control" placeholder="Enter password.." name="password" />
						<br/>	
						<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
<?php include("footer.php")?>