<?php

/**
* ACF Options page
*/

add_action('acf/init', 'seven_options');
    function seven_options()
    {
        acf_add_options_page('777 Options');
    }

    if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'group_5fc11bbb190cb',
            'title' => 'Enable validation for 777',
            'fields' => array(
                array(
                    'key' => 'field_5fc11bd02dc26',
                    'label' => 'Validate',
                    'name' => 'validate',
                    'type' => 'button_group',
                    'instructions' => 'Check box to enable validation',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        123456 => '6 characters',
                        1234567 => '7 characters',
                        12345678 => '8 characters',
                    ),
                    'allow_null' => 0,
                    'default_value' => '',
                    'layout' => 'vertical',
                    'return_format' => 'value',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-777-options',
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
        ));
        
        endif;
