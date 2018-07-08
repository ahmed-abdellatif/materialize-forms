<?php
require('header.php');
?>

<div class="container">
	<h3>Register Form</h3>
	<div class="row">
		<form class="col s12" action="../controller/register.php" method="post">

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input id="icon_prefix" type="text" name="first_name" size="20" maxlength="20" class="validate" value="<?php if (isset($trimmed['first_name'])) echo $trimmed['first_name']; ?>">
					<label for="icon_prefix">First Name</label>
				</div>

				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input id="lastname" type="text" name="last_name" size="20" maxlength="40" class="validate" value="<?php if (isset($trimmed['last_name'])) echo $trimmed['last_name']; ?>">
					<label for="icon_prefix">Last Name</label>
				</div>
			</div>

<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">mail</i>
					<input id="email" type="email" name="email" size="30" maxlength="60" class="validate" value="<?php if (isset($trimmed['email'])) echo $trimmed['email']; ?>">
					<label for="icon_prefix">Email</label>
				</div>
	</div>

<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input id="icon_prefix" type="password" name="password1" size="20" value="<?php if (isset($trimmed['password1'])) echo $trimmed['password1']; ?>">
					<label for="icon_prefix">Password</label>
				</div>
			</div>

<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">account_circle</i>
									<input id="icon_prefix" type="password" name="password2" size="20" value="<?php if (isset($trimmed['password2'])) echo $trimmed['password2']; ?>">
									<label for="icon_prefix">Confirm Password</label>
								</div>
             </div>
			    </div>

					  <button class="btn waves-effect waves-light" type="submit" name="action" value="Register">Submit
					    <i class="material-icons right">send</i>
					  </button>
</form>

</div>
<?php
require('footer.php');
?>
