<?php
/**
* Template Name: [custom] Picking List Form
*/

$user = wp_get_current_user();

// if ( !in_array( 'vendor', (array) $user->roles ) ) {
if ( !in_array( 'administrator', (array) $user->roles ) ) {
	echo "<script>window.location = '".site_url()."/login-vendor/'</script>";
}

?>

<?php get_header(); ?>

<h1>Picking List</h1>

<?php get_footer(); ?>
