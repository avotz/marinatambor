<?php 

function marinatambor_get_meta_box( $meta_boxes ) {
	$prefix = 'mt-';

	$meta_boxes[] = array(
		'id' => 'map_gallery',
		'title' => esc_html__( 'Gallery', 'marinatambor' ),
		'post_types' => array('map-zone'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'gallery',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Photos', 'marinatambor' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'marinatambor_get_meta_box' );