<?php
/**
 * ACF Field Groups for WhoAmI Options: Education
 *
 * @package whoami
 */

acf_add_local_field_group( array(
	'key' => 'group_663e6217f103a',
	'title' => 'Education',
	'fields' => array(
		array(
			'key' => 'field_663e6218093bd',
			'label' => '',
			'name' => 'institutions',
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
			'button_label' => 'Add Institution',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_663e621862a18',
					'label' => '',
					'name' => 'institution',
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
							'key' => 'field_663e62186aa13',
							'label' => 'Credential',
							'name' => 'credential',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => 'Credential',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_663e62186aa5d',
							'label' => 'Institution',
							'name' => 'name',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => 'Institution',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_663e62186aaa1',
							'label' => 'Location',
							'name' => 'location',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => 'Location',
							'prepend' => '',
							'append' => '',
						),
					),
					'parent_repeater' => 'field_663e6218093bd',
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
	'menu_order' => 4,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => 'Global content for WhoAmI: Education',
	'show_in_rest' => 1,
) );