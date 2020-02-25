<?php
// Add custom Theme Functions here

/* Purchase payment account flatsome themes, do what you want */
update_option( 'flatsome_wup_purchase_code', 'ZPXOCI-VUBYN-MTNRB-EFHEK-SWOAA' );
update_option( 'flatsome_wup_supported_until', '28.02.2099' );
update_option( 'flatsome_wup_buyer', 'hengky' );

/* You can edit function custom to handle much over script in folder "asset" */
/* --------------------------------------------------------------------------*/
// change admin logo
// require('custom/logo-wp-admin.php');

// change admin logo
// require('custom/input-resi-admin.php');

// Translater any text
// require('custom/translater-custom.php');

// Custom link menu sidebar woocommerce front end
// require('custom/woocommerce-sidebar-account.php');

// public function custom
require('brandplus/function/f_login_vendor.php');

// membuat role baru - vendor
add_role(
  'vendor',
  __( 'Vendor' ),
  array(
    'read'         => true,  // true allows this capability
    // 'add_posts' => true,
    'edit_posts'   => true,
    'delete_posts'   => true,
    'manage_woocommerce' => true,
    'view_woocommerce_reports' => true,
    'manage_product_terms' => true,
    'add_product_terms' => true,
    'edit_product_terms' => true,
    'delete_product_terms' => true,
    'assign_product_terms' => true,
    'manage_categories' => true,
  )
);
// remove_role('vendor');

// funtion beda menu
function my_wp_nav_menu_args( $args = '' ) {
  // $user = wp_get_current_user();
  // if( in_array( 'vendor', (array) $user->roles ) ) {
  if( get_current_user_id() ) {
    $args['menu'] = 'loged_vendor';
  } else {
    $args['menu'] = 'front';
  }
  return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

// add menu post category - product
// add_action( 'init', 'my_new_category_product' );
// function my_new_category_product() {
//     register_post_type( 'asd',
//         array(
//         'labels' => array(
//             'name' => __( 'Products' ),
//             'singular_name' => __( 'Product' ),
//             'add_new' => __( 'Add Product' ),
//           ),
//         'desciption' => 'Product list by Vendor',
//         'public' => true,
//         // 'has_archive' => true,
//         )
//     );
// }
