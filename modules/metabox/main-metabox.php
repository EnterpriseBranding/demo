<?php
$builder = wponion_builder();

$section1 = $builder->container( 'section1', __( 'Section 1' ), 'dashicons  dashicons-admin-generic' );
$section1->text( 'text', 'Text' );
$section1->textarea( 'textarea', 'Textarea' );
$section1->switcher( 'switcher', 'switcher' );

$section2 = $builder->container( 'section2', __( 'Section 2' ) );
$section2->color_picker( 'color_picker', 'Color Picker' );

$page = $builder->container( 'page', __( 'Nested Sections' ), 'dashicons  dashicons-admin-generic' );
$s1   = $page->container( 'section1', 'Section 1', 'dashicons  dashicons-admin-generic' );
$s1->text( 'page_s1_text', 'Text' );
$s1->textarea( 'page_s1_textarea', 'Textarea' );
$s1->switcher( 'page_s1_switcher', 'switcher' );

$s2 = $page->container( 'section2', 'Section 2', 'dashicons  dashicons-admin-generic' );
$s2->color_picker( 'page_s1_color_picker', 'Color Picker' );
$s2->icon_picker( 'page_s1_icon_picker', 'Icon Picker' );

$colors = array( '#e14d43', '#e16443', '#43afe1', '#436ce1', '#8443e1', '#e14397' );

wponion_metabox( array(
	'option_name'   => '_wponion_metabox_main_metabox',
	'metabox_title' => __( 'Custom Post/Page Option' ),
	'metabox_id'    => 'custom-post-option-by-wponion-3',
	'screens'       => array( 'post', 'page' ),
	'ajax'          => true,
	'theme_color'   => $colors[ ( rand( 1, 6 ) - 1 ) ],
), $builder );
