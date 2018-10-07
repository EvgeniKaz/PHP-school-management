<?php 
	require_once("includes/header.php");


	if ($session->is_signed_in()) {
		redirect("index.php");
	}

	if (isset($_POST['submit'])) {
		
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		// Method to check the database user
		$user_found = User::verify_user($email, $password);


		if ($user_found) {
			
			$session->login($user_found);
			redirect("index.php");
		} else {

			$the_message = "Yuor password or email are incorrect.";

		} } else {
			$the_message = "";
			$email = "";
			$password = "";
		}


 ?>


<div class="col-md-4 col-md-offset-3">

<h4 class="bg-danger"><?php echo $the_message; ?></h4>
	
<form id="login-id" action="" method="post">
	
<div class="form-group">
	<label for="email">E-mail</label>
	<input type="text" class="form-control" name="email" value="<?php echo htmlentities($email); ?>" >

</div>

<div class="form-group">
	<label for="password">Password</label>
	<input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">
	
</div>


<div class="form-group">
<input type="submit" name="submit" value="Login" class="btn btn-primary">

</div>


</form>


</div>