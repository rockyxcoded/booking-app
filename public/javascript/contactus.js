// JavaScript Document

$(document).ready(function() {
	function showError(remark)
	{
		$("#contactusbtn").removeAttr('disabled');
		$("#remark").show();
		$('html,body').animate({scrollTop:$("#remark").offset().top-200}, 'fast');
		$("#remark").html(remark);
        $("#remark").addClass('remark_error');
		setTimeout(function ()
		{
			$("#remark").fadeOut('slow');
		},5000);
	}
	
	function validator(element)
	{
		//if(element = 'terms'){var chkterms = 'df';}
		//var pattern = new RegExp("(?=^.{5,20}$)^[a-zA-Z][a-zA-Z0-9]*[._-]?[a-zA-Z0-9]+$");
		var pattern = new RegExp($("#"+element).attr('pattern'));
		var hasError = !($("#"+element).val()).match(pattern);

		var errorMsg = $("#"+element).attr('errorMsg');

		if($("#"+element).val())
		{
			if(hasError)
			{
				$("#"+element).css({"background-color" : '#FFB399'});
				$("#"+element)[0].setCustomValidity(errorMsg);
				$("#"+element+"_remark").html('<strong title="This field is important!">'+errorMsg+'</strong>');
				$("#"+element).addClass('errorBox');
			}
			else
			{
				$("#"+element).css({"background-color" : '#F9F9F9'});
				$("#"+element)[0].setCustomValidity('');
				$("#"+element+'_remark').html('');
				$("#"+element).removeClass('errorBox');
				
				if(element == 'email')
				{
					var email = $('#email').val().trim();
					$('#email_remark').html('<img src="../../images/busy.gif" />');
					$.post('ajax/signup/check_email.php', {"email": email}, function(data) {
						$("#email_remark").html('');
						if(data == 1)
						{
							var hasError = true;
							$("#email").css({"background-color" : '#FFB399'});
							$("#email")[0].setCustomValidity('* Email Address Already Exist!');
							$("#email"+"_remark").html('<strong title="This field is important!">* Email Address Already Exist!</strong>');
							$("#email").addClass('errorBox');
						}
						else
						{
							var hasError = false;
						}
					});
				}
			}
		}
		else
		{
			var hasError = true;
			$("#"+element).css({"background-color" : '#FFB399'});
			$("#"+element)[0].setCustomValidity(errorMsg);
			$("#"+element+"_remark").html('<strong title="This field is important!">'+errorMsg+'</strong>');
			$("#"+element).addClass('errorBox');
		}
		
		return hasError;
	}
	
	$("#contactusbtn").click(function() {
		$("#contactusbtn").attr('disabled', 'disabled');
		var form_error = false;
		var form_error = validator('first_name'); if(form_error){var first_name_error = true;}else{var first_name_error = false;}
		var form_error = validator('contact_email'); if(form_error){var contact_email_error = true;}else{var contact_email_error = false;}
		var form_error = validator('contact_phone'); if(form_error){var contact_phone_error = true;}else{var contact_phone_error = false;}
		var form_error = validator('contact_message'); if(form_error){var contact_message_error = true;}else{var contact_message_error = false;}
		
		if((first_name_error == true) || (contact_email_error == true) || (contact_phone_error == true) || (contact_message_error == true))
		{
			showError('Please fill fields marked with asterisk properly');
		}
		else
		{//alert('go11');
		
		    var first_name = $('#first_name').val();
		    
			var contact_name = $('#first_name').val()+' '+$('#last_name').val();
			var contact_email = $('#contact_email').val();
			var contact_phone = $('#contact_phone').val();
			
			if($('#contact_subject').val())
			{var contact_subject = $('#contact_subject').val();}
			else
			{var contact_subject = 'Contact Message from '+$('#first_name').val()+' ('+contact_phone+')';}
			
			var contact_message = $('#contact_message').val();
			//alert('hh = '+contact_name);
			$.post('ajax/signup/contactus.php',
			{
				"contact_name" : contact_name,
				"contact_email" : contact_email,
				"contact_phone" : contact_phone,
				"contact_subject" : contact_subject,
				"contact_message" : contact_message
			},
			function(data)
			{//alert('go');
			    
			    //reset...
			    
			    $("#contactusbtn").removeAttr('disabled');
			    $('#first_name').val('');
			    $('#last_name').val('');
			    $('#contact_email').val('');
			    $('#contact_phone').val('');
			    $('#contact_subject').val('');
			    $('#contact_message').val('');
			    
        		$("#remark").show();
        		$('html,body').animate({scrollTop:$("#remark").offset().top-200}, 'fast');
        		$("#remark").html(first_name+', expect our feedback shortly. Thank you.');
        		$("#remark").removeClass('remark_error');
        		$("#remark").addClass('remark_ok');
        		setTimeout(function ()
        		{
        			$("#remark").fadeOut('slow');
        		},5000);
			});
		}
	});
	
	
	
	$("#first_name").change(function(){
		validator('first_name');
	});
	
	$("#contact_email").change(function(){
		validator('contact_email');
	});
	
	$("#contact_phone").change(function(){
		validator('contact_phone');
	});
	
	$("#contact_message").change(function(){
		validator('contact_message');
	});
	
});