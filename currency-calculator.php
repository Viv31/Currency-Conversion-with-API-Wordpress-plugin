<?php
/*
* Plugin Name:Currency Conversion Calcultor
* Author:Vaibhav
* Version:1.0
* Description:Convert currencis through API's
* Author URI:
*/
if(!defined('ABSPATH')) exit;

//calling scripts and css libraries
include_once('libraries.php');

//including shortcode for currency shortcode
include_once('currency_shortcode.php');

//calling main file which converts the currency
include_once('convert_currency.php');

/*//calling main file which converts the currency
include_once('libraries.php');
*/
?>