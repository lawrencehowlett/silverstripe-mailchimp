(function($) {
    $(document).ready(function(){
        
    	$.fn.mailchimp = function(){

    		$(this).submit(function(e){

	    		var postData = $(this).serializeArray();
	    		var formURL = $(this).attr('action');
	    		var obj = $(this);

    			obj.find('input[type="submit"]').val('Sending please wait ...');

    			$.ajax({
    				url: formURL,
    				type: 'POST',
    				data: postData,
    				dataType: 'JSON',
    				success: function(data) {
    					if (data.success) {
    						obj.find('p#MailChimpForm_MailChimpForm_error').removeClass('bad').addClass('good').text(data.message).show();
    					} else {
    						obj.find('p#MailChimpForm_MailChimpForm_error').removeClass('good').addClass('bad').text(data.message).show();
    					}

    					obj.find('input[type="submit"]').val('Subscribe');
    				}
    			});

    			e.preventDefault();
    		});
    	}

    	$('form#MailChimpForm_MailChimpForm').mailchimp();
    })
})(jQuery);