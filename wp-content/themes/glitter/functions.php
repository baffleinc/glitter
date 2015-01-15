<?php

add_theme_support( 'woocommerce' );

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');

add_action('woocommerce_after_shop_loop_item', 'add_desc_to_shop_loop_item');

function add_desc_to_shop_loop_item(){
	echo '<p class="desc">'.get_the_content().'</p>';
}

