<?php
/**
 * ACF Field Groups for WhoAmI Options: Summary
 *
 * @package whoami
 */

	acf_add_local_field_group( array(
	'key' => 'group_6662734856b65',
	'title' => 'Summary',
	'fields' => array(
		array(
			'key' => 'field_6662734a8103d',
			'label' => '',
			'name' => 'summary',
			'aria-label' => '',
			'type' => 'textarea',
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
			'rows' => '5',
			'placeholder' => '',
			'new_lines' => '',
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
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 1,
) );