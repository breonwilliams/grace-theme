<?php
/**
 * Logo Customizer
 */



//  Menu logo

function m2_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'm2_logo' ); // Add setting for logo uploader

	// Add control for logo uploader (actual uploader)
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm2_logo', array(
		'label'    => __( 'Upload Menu Logo', 'm2' ),
		'section'  => 'title_tagline',
		'settings' => 'm2_logo',
		'priority' => 35,
	) ) );
}
add_action( 'customize_register', 'm2_customize_register' );

function copyright_customizer( $wp_customize ) {
	$wp_customize->add_section(
		'example_section_one',
		array(
			'title' => 'Copyright',
			'description' => 'This will appear in the footer.',
			'priority' => 35,
		)
	);

	$wp_customize->add_setting(
		'copyright_textbox',
		array(
			'default' => 'FunctionalMovement.com',
		)
	);

	$wp_customize->add_control(
		'copyright_textbox',
		array(
			'label' => 'Copyright text',
			'section' => 'example_section_one',
			'type' => 'text',
		)
	);

}

add_action( 'customize_register', 'copyright_customizer' );