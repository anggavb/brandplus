<?php
/**
* Template Name: [custom] Vendor Form
*/

$user = wp_get_current_user();

if ( !in_array( 'vendor', (array) $user->roles ) ) {
	echo "<script>window.location = '".site_url()."/login-vendor/'</script>";
}

?>

<?php get_header(); ?>

<h1>Hello World</h1>

<?php get_footer(); ?>
