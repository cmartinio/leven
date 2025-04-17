<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
	'id' => array( 'type' => 'unique' ),
	'padding_group' => array(
		'type' => 'group',
		'options' => array(
			'html_label'  => array(
				'type'  => 'html',
				'value' => '',
				'label' => esc_html__('Additional Spacing', 'leven'),
				'html'  => '',
			),
			'padding_top'  => array(
				'label'   => false,
				'desc'    => esc_html__( 'padding top', 'leven' ),
				'type'  => 'short-text',
				'value' => '0',
			),
			'padding_right'  => array(
				'label'   => false,
				'desc'    => esc_html__( 'padding right', 'leven' ),
				'type'  => 'short-text',
				'value' => '0',
			),
			'padding_bottom'  => array(
				'label'   => false,
				'desc'    => esc_html__( 'padding bottom', 'leven' ),
				'type'  => 'short-text',
				'value' => '0',
			),
			'padding_left'  => array(
				'label'   => false,
				'desc'    => esc_html__( 'padding left', 'leven' ),
				'type'  => 'short-text',
				'value' => '0',
			),
		)
	),
	'tablet'  => array(
		'label' => esc_html__( 'Responsive Layout for Tablet', 'leven' ),
		'desc'  => esc_html__( 'Choose the responsive tablet display for this column', 'leven' ),
		'help'  => esc_html__( 'Experimental functionality. Added at the request of the buyer. We do not recommend adding shortcodes with sliders to the slider column (Shortcodes: Testimonials, Clients, Image Slider).', 'leven' ),
		'type'  => 'select',
		'value' => '',
		'choices' => array(
			''             => esc_html__( 'Automatically inherit default layout', 'leven' ),
            'fw-col-sm-2'  => esc_html__( 'Make it a 1/6 column', 'leven' ),
            'fw-col-sm-3'  => esc_html__( 'Make it a 1/4 column', 'leven' ),
            'fw-col-sm-4'  => esc_html__( 'Make it a 1/3 column', 'leven' ),
            'fw-col-sm-6'  => esc_html__( 'Make it a 1/2 column', 'leven' ),
            'fw-col-sm-8'  => esc_html__( 'Make it a 2/3 column', 'leven' ),
            'fw-col-sm-9'  => esc_html__( 'Make it a 3/4 column', 'leven' ),
            'fw-col-sm-12' => esc_html__( 'Make it a 1/1 column', 'leven' ),
		)
	),
	'class'  => array(
		'label' => esc_html__( 'Custom Class', 'leven' ),
		'desc'  => esc_html__( 'Enter custom CSS class', 'leven' ),
		'help'  => esc_html__( 'You can use this class to further style this shortcode by adding your custom CSS.', 'leven' ),
		'type'  => 'text',
		'value' => '',
	),
	'content_slider' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'content_slider_switcher' => array(
				'label'        => esc_html__( 'Use Column as Content Slider', 'leven' ),
				'desc'  => esc_html__( 'In this column, you can display shortcodes as a slider. IMPORTANT: in this column you cannot use shortcodes that contain sliders (if you add them, they will not be displayed).', 'leven' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'on',
					'label' => esc_html__( 'on', 'leven' )
				),
				'left-choice'  => array(
					'value' => 'off',
					'label' => esc_html__( 'Off', 'leven' )
				),
				'value'        => 'off',
			)
		),
		'choices'      => array(
			'on' => array(
				'items'         => array(
					'label' => esc_html__( 'Items on the front: Desktop', 'leven' ),
					'desc'  => esc_html__( 'Example: 2', 'leven' ),
					'type'  => 'text',
					'value' => '3'
				),
				'items_tablet'         => array(
					'label' => esc_html__( 'Items on the front: Tablet', 'leven' ),
					'desc'  => esc_html__( 'Example: 2', 'leven' ),
					'type'  => 'text',
					'value' => '2'
				),
				'items_mobile'         => array(
					'label' => esc_html__( 'Items on the front: Mobile', 'leven' ),
					'desc'  => esc_html__( 'Example: 2', 'leven' ),
					'type'  => 'text',
					'value' => '1'
				),
				'loop' => array(
					'type'         => 'switch',
					'label'        => esc_html__( 'Infinity Loop', 'leven' ),
					'desc'         => esc_html__( 'Duplicate last and first items to get loop illusion.', 'leven' ),
					'value'        => 'off',
					'right-choice' => array(
						'value' => 'on',
						'label' => esc_html__( 'On', 'leven' ),
					),
					'left-choice'  => array(
						'value' => 'off',
						'label' => esc_html__( 'Off', 'leven' ),
					),
				),
				'autoplay' => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'autoplay_switcher' => array(
							'label'        => esc_html__( 'Autoplay', 'leven' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'on',
								'label' => esc_html__( 'On', 'leven' )
							),
							'left-choice'  => array(
								'value' => 'off',
								'label' => esc_html__( 'Off', 'leven' )
							),
							'value'        => 'off',
						)
					),
					'choices'      => array(
						'on' => array(
							'autoplay_tablet' => array(
								'label'        => esc_html__( 'Autoplay only on Tablets and Mobiles', 'leven' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'On', 'leven' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Off', 'leven' )
								),
								'value'        => 'off',
							),
							'autoplay_timeout'         => array(
								'label' => esc_html__( 'Atoplay Timeout', 'leven' ),
								'desc'  => esc_html__( 'Example: 5000.', 'leven' ),
								'type'  => 'text',
								'value' => '5000'
							),
						),
					),
					'show_borders' => false,
				),
			)
		),
		'show_borders' => false,
	),
);