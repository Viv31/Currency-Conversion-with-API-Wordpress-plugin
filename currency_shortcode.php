<?php
if(!defined('ABSPATH')) exit;
//Functon for genearating shortcode of plugin main section
if(!function_exists('CurCal_Shortcode')){
	function CurCal_Shortcode(){ ?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<h1>Currency Switcher</h1>
					<span>Currency will be converted with respect to USD.</span>
					<form action="" id="currency_exchange_form">
						<div class="form-group">
						<div class="col-md-4">
							<label>Curency Amount(in USD)</label>
								<input type="text" name="curr_amount" id="curr_amount" class="form-control" placeholder="Enter amount to convert">
							</div>
						<div class="col-md-4">
							<label>Convert Into:</label>
								<select name="currency" id="currency" class="form-control">
									<option value="">--Select Currency--</option>
									<option value="INR">USD-INR </option>
									<option value="USD">USD-USD</option>
									<option value="ZAR">USD-ZAR</option>
									<option value="EUR">USD-EUR</option>
									<option value="JPY">USD-JPY</option>
									<option value="BGN">USD-BGN</option>
									<option value="CZK">USD-CZK</option>
									<option value="DKK">USD-DKK</option>
									<option value="GBP">USD-GBP</option>
								</select>
							</div>
						</div>
					<label>Converted Value:</label>
					<div class="converted_rate"></div>
			</form>
				</div>
			</div>
		</div>
		
	<?php }
}
add_shortcode('CurrencyCalculator','CurCal_Shortcode');