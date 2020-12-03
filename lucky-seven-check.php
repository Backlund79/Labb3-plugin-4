<?php

/**
* Plugin Name: Lucky Seven 777 validator
* Author: Emil
*
*/

// register_activation_hook(__FILE__, 'check_for_lucky_seven');
// function check_for_lucky_seven()
// {
//     if (is_plugin_active('labb3-plugin-2/777.php')) {
//         add_action('update_option_active_plugins', 'deactivate_lucky_seven');
//     }
// }
// function deactivate_lucky_seven()
// {
//     deactivate_plugins('labb3-plugin-2/777.php');
// }

// include ABSPATH . '/wp-content/plugins/labb3-plugin-2/777.php';

function assert_if_seven_works()
{
    

    // Parameters
    $six = '123456';
    $seven = '1234567';
    $nine = '123456789';

    
    
    function test_func($string, $expected_val)
    {
        $test_seven = new Is_seven;
        $test_seven->set_string_to_check($string);
        $calc_value = $test_seven->is_seven_characters_long();
        $converted_res = $expected_val ? 'sant' : 'falskt';
        $converted_res2 = $calc_value ? 'sant' : 'falskt';

        if ($calc_value === $expected_val) {
            echo '<p style="color: green; padding-left: 1rem" > Skickat värde = ' . $string . '<br> Förväntat värde = ' . $converted_res . '<br> Beräknat värde = ' . $converted_res2 . '<br> Lyckat test </p><br>';
        } else {
            echo '<p style="color: red; padding-left: 1rem" >Skickat värde = ' . $string . '<br> Förväntat värde = ' . $converted_res . '<br> Beräknat värde = ' . $converted_res2 . ' <br> Misslyckat test </p><br>';
        }
    }
    test_func($six, false);
    test_func($seven, true);
    test_func($nine, false);
}

if (isset($_GET['testrun']) && $_GET['testrun'] === 'yes') {
    add_action('wp_body_open', 'assert_if_seven_works');
}
