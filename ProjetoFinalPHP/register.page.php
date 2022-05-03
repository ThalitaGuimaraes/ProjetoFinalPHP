     
<section class="page-login" id="login">
	<form action="user.register" method="post">
		<div class="login-wrap">
			<div class="login-logo">
			<b>Current</b>|Business
			</div>
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
				<div class="login-form">					
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Name</label>
							<input type="text" class="form-control" name="inputNome" placeholder="Full Name">
						</div>
						<div class="group">
							<label for="pass" class="label">Email</label>
							<input type="email" class="form-control" name="inputEmail" placeholder="Email">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input type="password" class="form-control" name="inputSenha" placeholder="Password">
						</div>
						<div class="group">
							<label for="pass" class="label">Repeat the password</label>
							<input type="password" class="form-control" name="inputSenhaRepetida" placeholder="Repeat password">
						</div>
						<div class="group">
							<input type="submit" class="button" value="Register">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="login.php">Already have an account</a>
						</div>
						<div class="foot-lnk">
							<a href="forgot-password.php">Forgot password?</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</form>
</section>
