<?php

/**
* Plugin Name: Lucky Seven 777 validator
* Author: Emil
*/



require 'acf-field-data.php';
include ABSPATH . '/wp-content/plugins/labb3-plugin-2/777.php';



class Validate extends Is_seven
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
