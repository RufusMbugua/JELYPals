<?php
$sessionUser = $this -> session -> userdata('username');
$sessionUserRights = $this -> session -> userdata('userRights');

$this -> load -> view('segments/header');
?>
<body>
	<?php
if($viewName=='Login'){
	?>
	<?php echo validation_errors(); ?>
	<form class="login" action="<?php echo base_url() ?>c_authorize/loginUser" method="post">
	<h3>Sign In</h3>
	<div class="fields">
	<label for="username">Username</label>
	<input type="text" size="20" id="username" name="username"  placeholder="Username"/>

	<label for="password">Password</label>
	<input type="password" size="20" id="password" name="password" placeholder="Password"/>
	</div>

	<input type="submit" value="Login" class="awesome black"/>
	</form>

	<?php }
	elseif ($viewName='Home'){
	//View for Student
	if($sessionUserRights=="student"){
	?>
	<header>
		<canvas id="myCanvas">

		</canvas>
		<section class="welcome">
			Welcome back <?php echo $sessionUser; ?>.
			New Notes waiting for you from PenPal.
			<p>Student Account.</p>
		</section>
		<section class="right-side">
			<a href='<?php echo base_url(); ?>c_front/index'>Logout</a>
			<section class="search">
				<input type="search" placeholder="Search Here"/>
			</section>
			<section class="options">
				<select>
					<option>Notes</option>
					<option>MyPad</option>
					<option>PenPal's Pad</option>
					<option>Post Note</option>
				</select>
				<select style="float:right">
					<option>Messages</option>
					<option>My Messages</option>
					<option>Send Message</option>
				</select>
			</section>
		</section>

	</header>
	<section class="within">

		<section class="content">
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
			<section class="notes-mini">

			</section>
		</section>

		<section class="right-menu">

		</section>
	</section>
	<?php
	}
	//View for Class Teacher
	elseif($sessionUserRights=='classteacher'){
	?>
	<header>
	<canvas id="myCanvas">

	</canvas>
	<section class="welcome">
	Welcome back <?php echo $sessionUser; ?>.
	<p>Teacher Account.</p>
	</section>
	<section class="right-side">
		<a class="awesome large" href='<?php echo base_url(); ?>c_front/index'>Logout</a>
	<section class="search">
	<input type="search" placeholder="Search Here"/>
	</section>
		<section class="options">
				<select class="users">
					<option selected='selected'>Select an option</option>
					<option>View Users</option>
				</select>
				<select style="float:right">
					<option>Messages</option>
					<option>My Messages</option>
					<option>Send Message</option>
				</select>
			</section>
	</header>
	
	<?php
	$this->load->view('sections/users');
	}

	}
	?>
	<?php $this -> load -> view('segments/footer'); ?>
