<?php
/**
 * Plugin Name: edd-remove-cap-shop vendor 
 * Plugin URI: http://www.wp-pro.ir/showthread.php?t=8126&p=42393
 * Description: Restriction of shop vendor.
 * Version:1.0
 * Author: vahid moghaddam
 * Author URI: www.wp-pro.ir
 */
# Get the user role #
$edit_shop_vendor = get_role('shop_vendor');
# Contributor can no longer delete posts #
$edit_shop_vendor->remove_cap('publish_products');
?>
