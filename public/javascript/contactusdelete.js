// JavaScript Document
$(document).ready(function() {
	
	function validator(element)
	{
		//if(element = 'terms'){var chkterms = 'df';}
		//var pattern = new RegExp("(?=^.{5,20}$)^[a-zA-Z][a-zA-Z0-9]*[._-]?[a-zA-Z0-9]+$");
		var pattern = new RegExp($("#"+element).attr('pattern'));
		var hasError = !($("#"+element).val()).match(pattern);

		var errorMsg = '*';

		if($("#"+element).val())
		{
			if(hasError)
			{
				$("#"+element).css({"background-color" : '#0F9'});
				$("#"+element)[0].setCustomValidity(errorMsg);
				$("#"+element+"_remark").html('<strong title="This field is important!">'+errorMsg+'</strong>');
				$("#"+element).addClass('errorBox');
			}
			else
			{
				$("#"+element).css({"background-color" : '#efefef'});
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
							$("#email").css({"background-color" : '#0F9'});
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
			$("#"+element).css({"background-color" : '#0F9'});
			$("#"+element)[0].setCustomValidity(errorMsg);
			$("#"+element+"_remark").html('<strong title="This field is important!">'+errorMsg+'</strong>');
			$("#"+element).addClass('errorBox');
		}
		
		return hasError;
	}

	$("#contactusbtn").click(function(e) {
		e.preventDefault();

		var form_error = false;
		var form_error = validator('contact_name'); if(form_error){var contact_name_error = true;}else{var contact_name_error = false;}
		var form_error = validator('contact_email'); if(form_error){var contact_email_error = true;}else{var contact_email_error = false;}
		var form_error = validator('contact_subject'); if(form_error){var contact_subject_error = true;}else{var contact_subject_error = false;}
		var form_error = validator('contact_message'); if(form_error){var contact_message_error = true;}else{var contact_message_error = false;}
		
		if((contact_name_error == true) || (contact_email_error == true) || (contact_subject_error == true) || (contact_message_error == true))
		{
			showError('Please fill fields marked with green properly');
		}
		else
		{
			$('#loading_remark').html('<img src="images/loader.gif" />');
			$("#contactusbtn").attr('disabled', 'disabled');

			$.post('ajax/signup/contactus.php',
			{
				"contact_name" : contact_name,
				"contact_email" : contact_email,
				"contact_phone" : contact_phone,
				"contact_subject" : contact_subject,
				"contact_message" : contact_message
			},
			function(data)
			{
				$('html,body').animate({scrollTop:$("#remark").offset().top-40}, 'slow');
				$('#remark').attr('class', 'right_notification');
				$('#remark').show();
				$('#remark').html('<strong>'+remark+'</strong>');
				setTimeout(function ()
				{
					var send_remark = '';
					$('#remark').hide('slow');
				},5000);
			});
		}
	});
	
});