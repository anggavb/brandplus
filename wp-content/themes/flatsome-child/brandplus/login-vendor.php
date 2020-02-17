<?php
/**
* Template Name: [custom] Login Vendor Form
*/
?>

<?php get_header(); ?>

<?php

	$user = wp_get_current_user();

	if ( !in_array( 'vendor', (array) $user->roles) ) {
		if ( $_POST ) {
			$login = new vendor();
			return $vendor->login();
		} else {

?>

	<form class="" action="" method="post">
		<label for="username">Username
			<input id="username" type="text" name="username" placeholder="Masukkan Username" value="">
		</label>
		<label for="password">Password
			<input id="password" type="text" name="password" placeholder="Masukkan Password" value="">
		</label>

		<div class="g-recaptcha" data-sitekey="6LffvY8UAAAAAFEHw4rUnSuL9tS99Ar6Zf6OUT8U"></div>

		<input type="submit" name="submit" value="login">
	</form>

	<script src="https://www.google.com/recaptcha/api.js"></script>

<?php

		}
	} else {
	echo "<script>window.location = '".site_url()."/vendor'</script>";
	}

?>

<?php get_footer();	?>
