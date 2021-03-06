<?php

function wpo_wp_pointer_custom_callback() {
	add_action( 'admin_enqueue_scripts', 'add_thickbox' );
	echo '<div id="menu-popup" style="display:none;">
			<p style="text-align: center;">
				 This is my hidden content! It will appear in ThickBox when the link is clicked.
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/EaWfDuXQfo0" frameborder="0" allowfullscreen></iframe>
			</p>
		</div>';
}


$ins = wponion_wp_pointers( 'vs' );

/**
 * Below Reset Code Is only Used For demo purpose
 * DO NOT USE IN PRODUCTION.
 */
$ins->reset();


$ins->add( '#menu-settings', __( 'PointerPlus Test' ), __( 'The plugin is active and ready to start working.' ), array(
	'width'      => 260,
	'post_type'  => 'post',
	'icon_class' => 'dashicons-admin-settings',
	'jsnext'     => "button = jQuery('<a id=\"pointer-close\" class=\"button action thickbox\" href=\"#TB_inline?width=700&height=500&inlineId=menu-popup\">" . __( 'Open Popup' ) . "</a>');
                    button.bind('click.pointer', function () {
                        t.element.pointer('close');
                    });
                    return button;",
	'phpcode'    => 'wpo_wp_pointer_custom_callback',
) );


$ins->add( '#menu-posts', 'PointerPlus for Posts', 'One more pointer', array(
	'post_type'  => 'post',
	'icon_class' => 'dashicons-admin-post',
	'width'      => 350,
) );
$ins->add( '#menu-pages', 'PointerPlus Pages', 'A pointer for pages.', array(
	'post_type'  => array( 'page' ),
	'icon_class' => 'dashicons-admin-post',
) );
$ins->add( '#menu-users', 'PointerPlus Users', 'A pointer for users.', array(
	'pages'      => array( 'users.php' ),
	'icon_class' => 'dashicons-admin-users',
) );

$ins->add( '#screen-options-link-wrap', 'PointerPlus Help', 'A pointer with action.', array(
	'edge'       => 'top',
	'align'      => 'right',
	'icon_class' => 'dashicons-welcome-learn-more',
) )
	->next( '#contextual-help-link-wrap', 'PointerPlus Help', 'A pointer for help tab.<br>Go to Posts, Pages or Users for other pointers', array(
		'edge'       => 'top',
		'align'      => 'right',
		'icon_class' => 'dashicons-welcome-learn-more',
		'show'       => 'close',
	) );

