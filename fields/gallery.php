<?php
$return = array();

$return[] = WPO\Field::create( 'gallery', 'gallery', __( 'Gallery' ) )
	->desc_field( '1. Click on the image to view full image.<br/> 2. Click & Drag Image to sort the listing' );

$return[] = WPO\Field::create( 'gallery', 'gallery_1', __( 'Custom Image Size In Output' ) )
	->size( 200 );

$return[] = WPO\Field::create( 'gallery', 'gallery_2', __( 'Gallery Without Sort' ) )
	->sort( false );

return $return;
