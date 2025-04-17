<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'blog' => array(
		'title'   => esc_html__( 'Blog Settings', 'leven' ),
		'type'    => 'tab',
		'options' => array(
			'blog_settings' => array(
				'title'   => esc_html__( 'Blog Settings', 'leven' ),
				'type'    => 'box',
				'attr'    => array('class' => 'initialized'),
				'options' => array(
					'blog_layout' => array(
						'label'   => esc_html__('Layout', 'leven'),
						'desc'    => esc_html__('How to display Blog Categories, Archive, Author Posts, and Index Page.', 'leven'),
						'type'    => 'select',
						'value'   => 'two-columns',
						'choices' => array(
							'list'   => esc_html__('List', 'leven'),
							'one-column'   => esc_html__('1 Column', 'leven'),
							'two-columns'   => esc_html__('2 Columns', 'leven'),
							'three-columns' => esc_html__('3 Columns', 'leven'),
						)
					),
				)
			)
		)
	)
);