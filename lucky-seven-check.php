<?php

/**
* Plugin Name: Lucky Seven 777 validator
* Author: Emil
*/
register_activation_hook(__FILE__, 'check_for_lucky_seven');
function check_for_lucky_seven()
{
    if (is_plugin_active('labb3-plugin-2/777.php')) {
        add_action('update_option_active_plugins', 'deactivate_lucky_seven');
    }
}
function deactivate_lucky_seven()
{
    deactivate_plugins('labb3-plugin-2/777.php');
}

require 'acf-field-data.php';
// include ABSPATH . '/wp-content/plugins/labb3-plugin-2/777.php';



class Validate
{
    public $test_string;

    public function set_validate_string($test_string)
    {
        $this->test_string = $test_string;
    }
    public function get_validate_string()
    {
        return $this->test_string;
    }
}
