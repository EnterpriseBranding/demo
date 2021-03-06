<?php
function wponion_dashboard_widget_1() {
	$builder = wponion_builder();
	$builder->text( 'your-name', __( 'Your Name' ) )->validate( 'wponion_is_required' );
	$builder->image( 'image', __( 'Image Select' ) );
	return $builder;
}

/**
 * Below Widgets Shows only in Single site.
 */
wponion_dashboard_widgets( array(
	'widget_id'   => 'wponion_dashboard_widget',
	'widget_name' => __( 'Dashboard Widget' ),
	'option_name' => '_wponion_dashboard_widgets',
	'callback'    => function ( $dashboard ) {
		$dashboard = wp_parse_args( $dashboard, array(
			'your-name' => '',
			'image'     => false,
		) );
		echo '<h2> Hello ' . $dashboard['your-name'] . ' !</h2>';
		echo '<p>You Have Selected Below Image</p>';
		echo wp_get_attachment_image( $dashboard['image'], 'medium' );
	},
), 'wponion_dashboard_widget_1' );

require_once __DIR__ . '/network-and-site-widget.php';
require_once __DIR__ . '/network-only.php';
