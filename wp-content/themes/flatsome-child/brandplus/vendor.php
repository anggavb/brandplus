<?php
/**
* Template Name: [custom] Vendor Form
*/

$user = wp_get_current_user();

// if ( !in_array( 'vendor', (array) $user->roles ) ) {
if ( !in_array( 'administrator', (array) $user->roles ) ) {
	echo "<script>window.location = '".site_url()."/login-vendor/'</script>";
}

?>

<?php get_header(); ?>

<h1>Product List</h1>

<form action="<?= site_url()."/input-product" ?>" method="post">
	<button type="submit" name="button">Add Product</button>
</form>

<?php
$params = array('posts_per_page' => 5, 'post_type' => 'product', 'author' => get_current_user_id());
$wc_query = new WP_Query($params);

$product = new WC_Product($params);
$product = get_product(get_the_ID());
?>
<ul>
     <?php if ($wc_query->have_posts()) : ?>
     <?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
     <li>
          <h3>
               <a href="<?php the_permalink(); ?>">
               <?php the_title(); ?>
               </a>
          </h3>
          <?php the_post_thumbnail('thumbnail'); ?>
          <?php the_excerpt(); ?>
					<?php echo $product->get_price_html(); ?>
					<?php echo $product->get_rating_html(); ?>
					<br>
					<code>Stock: <?php echo $product->is_in_stock() ?></code>
					<a href="#">Update</a>

     </li>
     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
     <?php else:  ?>
     <li>
          <?php _e( 'No Products' ); ?>
     </li>
     <?php endif; ?>
</ul>

<?php get_footer(); ?>
