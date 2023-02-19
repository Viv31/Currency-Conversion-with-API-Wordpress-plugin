<?php
//Functon for genearating shortcode of plugin main section
if(!function_exists('CurCal_Shortcode')){
	function CurCal_Shortcode(){ ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
		<div class="form-container">
			<h1>Currency Switcher</h1>
			<span>Currency will be converted with respect to USD.</span>
			<form action="" id="currency_exchange_form">
				<label>Curency Amount(in USD)</label>
				<input type="text" name="curr_amount" id="curr_amount" placeholder="Enter amount to convert">
				<label>Convert Into:</label>
				<select name="currency" id="currency">
					<option value="">--Select Currency--</option>
					<option value="INR">INR </option>
					<option value="USD">USD</option>
					<option value="ZAR">ZAR</option>
					<option value="EUR">EUR</option>
					<option value="JPY">JPY</option>
					<option value="BGN">BGN</option>
					<option value="CZK">CZK</option>
					<option value="DKK">DKK</option>
					<option value="GBP">GBP</option>
				</select>

			</form>
			<label>Converted Value:</label>
			<div class="converted_rate"></div>
		</div>
	<?php }
}
add_shortcode('CurrencyCalculator','CurCal_Shortcode');