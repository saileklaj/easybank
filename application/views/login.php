
<?php 
	if(validation_errors()){
		echo '<div class="errores">'.validation_errors().'</div>';
	}
?>
<div class="content">
	<div class="LoginBox">
		<img class="avatarlog" src="<?php echo base_url();?>Style/images/Icons/EasyB.jpg" alt="LogIcon">
		<h1>Login</h1>
		<form action="<?php echo site_url('Clogin/login');?>" method="POST">
			<label for="Username">Username</label>
			<input type="text" placeholder="Enter Username" name="Username">
			<label for="Password">Password</label>
			<input type="text" placeholder="Enter Password" name="Password">

			<input type="submit" value="Submit"><br>

			<a href="#">Lost Your Password?</a><br>
			<a href="#">Don´t have an account?</a><br>
		</form>
	</div>
</div>