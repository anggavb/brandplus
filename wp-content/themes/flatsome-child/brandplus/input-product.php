<?php
/**
* Template Name: [custom] Input Product Form
*/

$user = wp_get_current_user();

// if ( !in_array( 'vendor', (array) $user->roles ) ) {
if ( !in_array( 'administrator', (array) $user->roles ) ) {
	echo "<script>window.location = '".site_url()."/login-vendor/'</script>";
}

?>

<?php get_header(); ?>

<form class="" action="" method="post" enctype="multipart/form-data">

  <label for="titleproduct">Title Product
    <input id="titleproduct" type="text" name="titleproduct" placeholder="Title of Product" value="">
  </label>
  <label for="price">Price
    <input id="price" type="text" name="price" placeholder="Price of Product" value="">
  </label>
  <label for="stock">Stock
    <input id="stock" type="number" name="stock" value="">
  </label>
  <label for="pictproduct">Upload Picture of Product <br>
		<input type="file" name="pictproduct" id="pictproduct" />
	</label>

  <input type="submit" name="submit" value="Add Product">
</form>

<?php get_footer(); ?>
