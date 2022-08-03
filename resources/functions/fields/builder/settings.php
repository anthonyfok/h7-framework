<?php

//
// GROUPS
//

$GLOBALS['fw_fields']['common']['settings']['alignment'] = array(
	'settings' => array (
		'title' => 'Setting — Alignment'
	),
	'field_group' => array (
		'key' => 'builder_setting_alignment',
		'title' => 'Alignment',
		'fields' => array(
			array(
				'key' => 'builder_setting_alignment_align',
				'label' => 'Alignment',
				'name' => 'alignment',
				'type' => 'select',
				'choices' => array(
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right',
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'value',
			),
		),
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['background'] = array(
	'settings' => array (
		'title' => 'Setting — Background'
	),
	'field_group' => array (
		'key' => 'builder_setting_bg',
		'title' => 'Background',
		'fields' => array(
			array(
				'key' => 'builder_setting_bg_element_clone',
				'label' => 'Background',
				'name' => 'background',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'clone' => array(
					0 => 'builder_element_bg',
				),
				'display' => 'seamless',
				'layout' => 'block',
				'prefix_label' => 0,
				'prefix_name' => 0,
			)
		),
		// 'fields' => $GLOBALS['fw_fields']['common']['elements']['bg']['field_group']['fields'],
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['colours'] = array(
	'settings' => array (
		'title' => 'Setting — Colours'
	),
	'field_group' => array (
		'key' => 'builder_setting_colours',
		'title' => 'Colours',
		'fields' => array(
			array(
				'key' => 'builder_setting_colours_element_clone',
				'label' => 'Colours',
				'name' => 'colours',
				'type' => 'clone',
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'clone' => array(
					0 => 'builder_element_colours',
				),
				'display' => 'group',
				'layout' => 'block',
				'prefix_label' => 0,
				'prefix_name' => 0,
			),
		),
		// 'fields' => $GLOBALS['fw_fields']['common']['elements']['colours']['field_group']['fields'],
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['flexbox'] = array(
	'settings' => array (
		'title' => 'Setting — Flexbox'
	),
	'field_group' => array (
		'key' => 'builder_setting_flexbox',
		'title' => 'Flexbox',
		'fields' => array(
			array(
				'key' => 'field_5e4454593e6a7',
				'label' => 'Direction',
				'name' => 'direction',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'row' => 'Row',
					'column' => 'Column',
				),
				'default_value' => false,
				'allow_null' => 1,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5e4454373e6a6',
				'label' => 'Align Items',
				'name' => 'align',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'center' => 'Center',
					'start' => 'Start',
					'end' => 'End',
					'stretch' => 'Stretch',
				),
				'default_value' => false,
				'allow_null' => 1,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5e4455243e6a8',
				'label' => 'Justify Content',
				'name' => 'justify',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'start' => 'Start',
					'end' => 'End',
					'center' => 'Center',
					'between' => 'Space Between',
					'around' => 'Space Around',
				),
				'default_value' => false,
				'allow_null' => 1,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
		),
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['spacing'] = array(
	'settings' => array (
		'title' => 'Setting — Spacing'
	),
	'field_group' => array (
		'key' => 'builder_setting_spacing',
		'title' => 'Spacing',
		'fields' => array(
			array(
				'key' => 'field_62ea6d0bf47b1',
				'label' => 'Spacing',
				'name' => 'spacing',
				'type' => 'repeater',
				'collapsed' => 'field_62ea6d1cf47b2',
				'layout' => 'table',
				'button_label' => 'Add Property',
				'sub_fields' => array(
					array(
						'key' => 'field_62ea6d1cf47b2',
						'label' => 'Property',
						'name' => 'property',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'p' => 'Padding',
							'm' => 'Margin',
						),
						'default_value' => false,
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_62ea6e05f47b4',
						'label' => 'Sides',
						'name' => 'sides',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'x' => 'X',
							'y' => 'Y',
							't' => 'top',
							'b' => 'bottom',
							'l' => 'left',
							'r' => 'right',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_62ea6daef47b3',
						'label' => 'Breakpoint',
						'name' => 'breakpoint',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'sm' => 'Small',
							'md' => 'Medium',
							'lg' => 'Large',
							'xl' => 'X-Large',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_62ea6e5bf47b5',
						'label' => 'Value',
						'name' => 'value',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							0 => '0',
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							5 => '5',
							6 => '6',
							7 => '7',
							8 => '8',
							9 => '9',
							10 => '10',
						),
						'default_value' => false,
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
				),
			),
		),
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['sticky'] = array(
	'settings' => array (
		'title' => 'Setting — Sticky'
	),
	'field_group' => array (
		'key' => 'builder_setting_sticky',
		'title' => 'Sticky',
		'fields' => array(
			array(
				'key' => 'field_5dc1d7524f5d1',
				'label' => 'Parent Selector',
				'name' => 'parent',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'body',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5dc1d7524f5d8',
				'label' => 'Offset',
				'name' => 'offset',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5de52cf3d11eb',
				'label' => 'Disable at breakpoint',
				'name' => 'breakpoint',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'never' => 'Never',
					576 => 'X-Small',
					768 => 'Small',
					992 => 'Medium',
					1200 => 'Large',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),

		),
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['aos'] = array(
	'settings' => array (
		'title' => 'Setting — Animate on Scroll'
	),
	'field_group' => array (
		'key' => 'builder_setting_aos',
		'title' => 'Animate on Scroll',
		'fields' => array(
			array(
				'key' => 'field_5f6a470bb1e24',
				'label' => 'Animation',
				'name' => 'animation',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'fade' => 'fade',
					'fade-up' => 'fade-up',
					'fade-down' => 'fade-down',
					'fade-left' => 'fade-left',
					'fade-right' => 'fade-right',
					'fade-up-right' => 'fade-up-right',
					'fade-up-left' => 'fade-up-left',
					'fade-down-right' => 'fade-down-right',
					'fade-down-left' => 'fade-down-left',
					'flip-up' => 'flip-up',
					'flip-down' => 'flip-down',
					'flip-left' => 'flip-left',
					'flip-right' => 'flip-right',
					'slide-up' => 'slide-up',
					'slide-down' => 'slide-down',
					'slide-left' => 'slide-left',
					'slide-right' => 'slide-right',
					'zoom-in' => 'zoom-in',
					'zoom-in-up' => 'zoom-in-up',
					'zoom-in-down' => 'zoom-in-down',
					'zoom-in-left' => 'zoom-in-left',
					'zoom-in-right' => 'zoom-in-right',
					'zoom-out' => 'zoom-out',
					'zoom-out-up' => 'zoom-out-up',
					'zoom-out-down' => 'zoom-out-down',
					'zoom-out-left' => 'zoom-out-left',
					'zoom-out-right' => 'zoom-out-right',
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5f6a45b416c1c',
				'label' => 'Easing',
				'name' => 'easing',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'linear' => 'linear',
					'ease' => 'ease',
					'ease-in' => 'ease-in',
					'ease-out' => 'ease-out',
					'ease-in-out' => 'ease-in-out',
					'ease-in-back' => 'ease-in-back',
					'ease-out-back' => 'ease-out-back',
					'ease-in-out-back' => 'ease-in-out-back',
					'ease-in-sine' => 'ease-in-sine',
					'ease-out-sine' => 'ease-out-sine',
					'ease-in-out-sine' => 'ease-in-out-sine',
					'ease-in-quad' => 'ease-in-quad',
					'ease-out-quad' => 'ease-out-quad',
					'ease-in-out-quad' => 'ease-in-out-quad',
					'ease-in-cubic' => 'ease-in-cubic',
					'ease-out-cubic' => 'ease-out-cubic',
					'ease-in-out-cubic' => 'ease-in-out-cubic',
					'ease-in-quart' => 'ease-in-quart',
					'ease-out-quart' => 'ease-out-quart',
					'ease-in-out-quart' => 'ease-in-out-quart',
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5f6a453616c1a',
				'label' => 'Offset',
				'name' => 'offset',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5f6a457916c1b',
				'label' => 'Duration',
				'name' => 'duration',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5f6a45ce16c1d',
				'label' => 'Delay',
				'name' => 'delay',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5f6a45e016c1e',
				'label' => 'Anchor',
				'name' => 'anchor',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '#',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f6a45ee16c1f',
				'label' => 'Once',
				'name' => 'once',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['carousel'] = array(
	'settings' => array (
		'title' => 'Setting — Carousel'
	),
	'field_group' => array (
		'key' => 'builder_setting_carousel',
		'title' => 'Carousel',
		'fields' => array(
			array(
				'key' => 'field_5e74ef46c0ce9',
				'label' => 'Classes',
				'name' => 'carousel_classes',
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
						'key' => 'field_5e74ef46c24d0',
						'label' => 'Container',
						'name' => 'container',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5f7b30b9aded6',
						'label' => 'Item',
						'name' => 'item',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5e74ef46c24e3',
						'label' => 'Controls',
						'name' => 'controls',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_5e74ef469d5d5',
				'label' => 'Slides to Show',
				'name' => 'slidesPerView',
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
						'key' => 'field_5e74ef46a07fe',
						'label' => 'Default',
						'name' => 'xs',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e74ef46a07f8',
						'label' => 'Small',
						'name' => 'sm',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e74ef46a07f2',
						'label' => 'Medium',
						'name' => 'md',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e74ef46a07ec',
						'label' => 'Large',
						'name' => 'lg',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e74ef46a07e3',
						'label' => 'X-Large',
						'name' => 'xl',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
				),
			),
			array(
				'key' => 'field_5e74ef46a840c',
				'label' => 'Slides to Scroll',
				'name' => 'slidesPerGroup',
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
						'key' => 'field_5e74ef46a9996',
						'label' => 'Default',
						'name' => 'xs',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e74ef46a998d',
						'label' => 'Small',
						'name' => 'sm',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'return_format' => 'value',
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e74ef46a9987',
						'label' => 'Medium',
						'name' => 'md',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'return_format' => 'value',
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e74ef46a9980',
						'label' => 'Large',
						'name' => 'lg',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'return_format' => 'value',
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e74ef46a9977',
						'label' => 'X-Large',
						'name' => 'xl',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							1 => '1',
							2 => '2',
							3 => '3',
							4 => '4',
							6 => '6',
						),
						'default_value' => false,
						'allow_null' => 1,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
				),
			),
			array(
				'key' => 'field_5e74ef46b2549',
				'label' => 'Autoplay Speed',
				'name' => 'autoplaySpeed',
				'type' => 'number',
				'instructions' => 'Time between automatic slide transitions. Enter 0 to turn autoplay off.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => 5,
				'placeholder' => '',
				'prepend' => '',
				'append' => 'seconds',
				'min' => 0,
				'max' => 20,
				'step' => 1,
			),
			array(
				'key' => 'field_5e7506d1026dd',
				'label' => 'Loop',
				'name' => 'loop',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5e74ef46b3af9',
				'label' => 'Effect',
				'name' => 'effect',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'slide' => 'Slide',
					'fade' => 'Fade',
					'cube' => 'Cube',
					'coverflow' => 'Coverflow',
					'flip' => 'Flip',
				),
				'default_value' => 'slide',
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5e74ef46b5178',
				'label' => 'Auto Height',
				'name' => 'autoHeight',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5e74fe12d3d28',
				'label' => 'Centered',
				'name' => 'centeredSlides',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5e74ef46b8045',
				'label' => 'Arrows',
				'name' => 'arrows',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 1,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5e7e0ab32e6ee',
				'label' => 'Pagination',
				'name' => 'pagination',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'none' => 'None',
					'bullets' => 'Bullets',
					'fraction' => 'Fraction',
					'progressbar' => 'Progress Bar',
					'dynamic' => 'Dynamic Bullets',
				),
				'default_value' => 'none',
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5e74ef46bad1f',
				'label' => 'Other Settings',
				'name' => 'other',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Add Setting',
				'sub_fields' => array(
					array(
						'key' => 'field_5e74ef46bc675',
						'label' => 'Setting',
						'name' => 'setting',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '40',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5e74ef46bc67e',
						'label' => 'Value',
						'name' => 'value',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '40',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5f64d213a04fa',
						'label' => 'Type',
						'name' => 'type',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'string' => 'String',
							'int' => 'Integer',
							'boolean' => 'Boolean',
							'json' => 'JSON',
						),
						'default_value' => false,
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
				),
			),
		),
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['tabs'] = array(
	'settings' => array (
		'title' => 'Setting — Tabs'
	),
	'field_group' => array (
		'key' => 'builder_setting_tabs',
		'title' => 'Tabs',
		'fields' => array(
			array(
				'key' => 'field_5e8ddcb08e0e1',
				'label' => 'Labels',
				'name' => 'labels',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Add Label',
				'sub_fields' => array(
					array(
						'key' => 'field_5e8ddcc38e0e2',
						'label' => 'Label',
						'name' => 'label',
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
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_5e8dec7aa1513',
				'label' => 'Menu Classes',
				'name' => 'menu_classes',
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
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['header'] = array(
	'settings' => array (
		'title' => 'Setting — Header Style'
	),
	'field_group' => array (
		'key' => 'builder_setting_headerstyle',
		'title' => 'Header Style',
		'fields' => array(
			array(
				'key' => 'field_5f6a3662076a0',
				'label' => 'Header Style',
				'name' => 'header_style',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'light' => 'Light',
					'dark' => 'Dark',
					'hidden' => 'Hidden',
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
		),
		'active' => false,
	)
);

$GLOBALS['fw_fields']['common']['settings']['collapsible'] = array(
	'settings' => array (
		'title' => 'Setting — Collapsible'
	),
	'field_group' => array (
		'key' => 'builder_setting_collapsible',
		'title' => 'Collapsible',
		'fields' => array(
			array(
				'key' => 'field_5dc5b0c546608',
				'label' => 'Collapse at breakpoint',
				'name' => 'breakpoint',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'default' => 'Always',
					'sm' => 'Small',
					'md' => 'Medium',
					'lg' => 'Large',
					'xl' => 'X-Large',
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5f0f577fee932',
				'label' => 'Trigger',
				'name' => 'trigger',
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
						'key' => 'field_5dd435ea79bc2',
						'label' => '\'Expand\' Text',
						'name' => 'expand_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5dd435c979bc1',
						'label' => '\'Expand\' Icon',
						'name' => 'expand_icon',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => 'fas fa-bars',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5f10572a93f71',
						'label' => '\'Collapse\' Text',
						'name' => 'collapse_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5f0f55a1b7254',
						'label' => '\'Collapse\' Icon',
						'name' => 'collapse_icon',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => 'fas fa-times',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5f1086750e8c4',
						'label' => 'Append to',
						'name' => 'append',
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
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'active' => false,
	)
);

//
// LAYOUTS
//

$layouts = array();

foreach ( $GLOBALS['fw_fields']['common']['settings'] as $group_name => $block ) {

	$layouts[$block['field_group']['key'] . '_layout'] = array(
		'key' => $block['field_group']['key'] . '_layout',
		'name' => $group_name,
		'label' => $block['field_group']['title'],
		'display' => 'block',
		'max' => 1,
		'sub_fields' => array(
			array(
				'key' => $block['field_group']['key'] . '_clone',
				'label' => $block['field_group']['title'],
				'name' => $group_name,
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'clone' => array(
					0 => $block['field_group']['key']
				),
				'display' => 'seamless',
				'layout' => 'block',
				'prefix_label' => 0,
				'prefix_name' => 0
			),
		),
	);

}

// foreach ( $GLOBALS['fw_fields']['common']['settings'] as $group_name => $block ) {
//
// 	$layouts[$block['field_group']['key'] . '_layout'] = array(
// 		'key' => $block['field_group']['key'] . '_layout',
// 		'name' => $group_name,
// 		'label' => $block['field_group']['title'],
// 		'display' => 'block',
// 		'max' => 1,
// 		'sub_fields' => array(
// 			array(
// 				'key' => $block['field_group']['key'] . '_clone',
// 				'label' => $block['field_group']['title'],
// 				'name' => $group_name,
// 				'type' => 'clone',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'clone' => array(
// 					0 => $block['field_group']['key']
// 				),
// 				'display' => 'seamless',
// 				'layout' => 'block',
// 				'prefix_label' => 0,
// 				'prefix_name' => 0
// 			),
// 		),
// 	);
//
// }

//
// FIELD GROUP
//
//
// $GLOBALS['fw_fields']['settings_flex'] = array (
// 	'settings' => array(),
// 	'field_group' => array (
// 		'key' => 'builder_settings',
// 		'title' => 'settings',
// 		'fields' => array(
// 			array(
// 				'key' => 'field_5fc101c73d9b4',
// 				'label' => 'settings',
// 				'name' => 'settings',
// 				'type' => 'flexible_content',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'layouts' => $layouts,
// 				'button_label' => 'Add Row',
// 				'min' => '',
// 				'max' => '',
// 			),
// 		),
// 		'active' => false,
// 	)
// );
//
//

$GLOBALS['fw_fields']['settings_flex'] = array(
	'settings' => array (
		'title' => 'Settings'
	),
	'field_group' => array (
		'key' => 'builder_settings',
		'title' => 'Settings',
		'fields' => array(
			array(
				'key' => 'field_5dc1d75b83c2c',
				'label' => 'Settings',
				'name' => 'settings',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => 'settings-flex',
					'id' => '',
				),
				'layouts' => $layouts,
				'button_label' => 'Add Setting',
				'min' => '',
				'max' => '',
			),
		),
		'active' => false,
	)
);
