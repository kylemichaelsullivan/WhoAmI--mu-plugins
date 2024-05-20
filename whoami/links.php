<?php
/**
 * ACF Field Groups for WhoAmI Options: Links
 *
 * @package whoami
 */

acf_add_local_field_group( array(
	'key' => 'group_663e625c3ec04',
	'title' => 'Links',
	'fields' => array(
		array(
			'key' => 'field_663e625c54360',
			'label' => '',
			'name' => 'links',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Link',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_663e625cd4f72',
					'label' => '',
					'name' => 'link',
					'aria-label' => '',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_663e625cd9ed1',
							'label' => 'Icon',
							'name' => 'icon',
							'aria-label' => '',
							'type' => 'font-awesome',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '35',
								'class' => '',
								'id' => '',
							),
							'icon_sets' => array(
								0 => 'solid',
								1 => 'regular',
								2 => 'brands',
							),
							'custom_icon_set' => '',
							'default_label' => '',
							'default_value' => '',
							'save_format' => 'element',
							'allow_null' => 0,
							'show_preview' => 1,
							'enqueue_fa' => 0,
							'fa_live_preview' => '',
							'choices' => array(
							),
						),
						array(
							'key' => 'field_663e625cd9f11',
							'label' => 'Link',
							'name' => 'link',
							'aria-label' => '',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '65',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
					),
					'parent_repeater' => 'field_663e625c54360',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'whoami',
			),
		),
	),
	'menu_order' => 5,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => 'Global content for WhoAmI: Links',
	'show_in_rest' => 1,
) );