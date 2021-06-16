function codeithub_woo_my_account_order() {
	$myorder = array(
		'edit-account'       => __( 'Change My Details', 'woocommerce' ),
		'dashboard'          => __( 'Dashboard', 'woocommerce' ),
		'orders'             => __( 'My Orders', 'woocommerce' ),
		'downloads'          => __( 'Download', 'woocommerce' ),
		'edit-address'       => __( 'Addresses', 'woocommerce' ),
		'payment-methods'    => __( 'Payment Methods', 'woocommerce' ),
		'customer-logout'    => __( 'Logout', 'woocommerce' ),
	);

	return $myorder;
}
add_filter ( 'woocommerce_account_menu_items', 'codeithub_woo_my_account_order' );
