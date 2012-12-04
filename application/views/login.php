<?php $this -> load -> view('segments/header'); ?>
<body>
	<?php
	if($viewName=='Login'){  ?>
	<?php echo validation_errors(); ?>
	<form class="login" action="<?php echo base_url() ?>c_authorize/loginUser" method="post">
		<h3>Sign In</h3>
		<div class="fields">
		<label for="username">Username</label>
		<input type="text" size="20" id="username" name="username"  placeholder="Username"/>
		
		<label for="password">Password</label>
		<input type="password" size="20" id="password" name="password" placeholder="Password"/>
		</div>
		
		<input type="submit" value="Login"/>
	</form>
	
	<?php } ?>
<?php $this -> load -> view('segments/footer'); ?>
