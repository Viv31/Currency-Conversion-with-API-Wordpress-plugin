jQuery('#currency').change(function(){
	//alert();
				//Getting user selected currency value
				var currency = jQuery("#currency").val();
				var curr_amount = jQuery("#curr_amount").val();
				// AJAX url
				var ajax_url = plugin_ajax_object.ajax_url;
				//console.log("Ajax URl",ajax_url);
				var data = {
					'action': 'get_convertedCurrency',//function name which is created by us in function.php
					'currency':currency,
					'curr_amount':curr_amount
				};
				//console.log(data);
				jQuery.ajax({
					url: ajax_url, // this is the object instantiated in wp_localize_script function
			    	type: 'POST',
			    	data:data,
			    beforeSend: function() {
       				 // setting a timeout
       				 jQuery(".converted_rate").html('<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>');
    			},
    			success: function(res){
			    	if(res){
			    		//alert(res);
			    		var converted_amount = ((res)*(curr_amount));
			    		//alert(converted_amount);
			      		jQuery(".converted_rate").html('<span class="btn btn-primary">'+converted_amount.toFixed(2)+'</span>'+' '+currency);
			      	}
			  }

				});
			});