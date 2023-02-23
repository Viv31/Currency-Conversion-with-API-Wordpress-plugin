<?php
if(!defined('ABSPATH')) exit;
//ajax function 
   add_action('wp_ajax_get_convertedCurrency','get_convertedCurrency' );
   add_action('wp_ajax_nopriv_get_convertedCurrency','get_convertedCurrency' );
   function get_convertedCurrency(){
   	global $wpdb; // this is how you get access to the database
   	$curr_amount = sanitize_text_field($_POST['curr_amount']);
   	$currency = strtoupper(sanitize_text_field($_POST['currency']));
   	$API_Key = "FynqUtKB6TBcs6MuSEOmCNsAbLtCvaXF5vUTLOQb";
   	//die($currency);
   	$api_url = "https://api.freecurrencyapi.com/v1/latest?apikey=$API_Key&currencies=$currency";
   	$curl = curl_init($api_url);
  	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($curl, CURLOPT_URL, $api_url);
	$resp = curl_exec($curl);
	curl_close($curl);
	$currency_value =  json_decode($resp,true);
	$array = json_decode(json_encode($currency_value), true);
	$converted_amount = $array['data'][$currency];
	echo number_format($converted_amount, 2);
	wp_die(); // this is required to terminate immediately and return a proper response
   }