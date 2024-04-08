// JavaScript Document

$(document).ready(function() {
	function showError4(remark)
	{
		$("#contactusbtn").removeAttr('disabled');
		$("#remark4").show();
		$('html,body').animate({scrollTop:$("#remark4").offset().top-200}, 'fast');
		$("#remark4").html(remark);
        $("#remark4").addClass('remark_error');
		setTimeout(function ()
		{
			$("#remark4").fadeOut('slow');
		},5000);
	}
	
	function validator4(element)
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
				
				if(element == 'booking-email')
				{
					var email = $('#booking-email').val().trim();
					$('#remark4k').html('<img src="../../images/busy.gif" />');
					$.post('ajax/signup/check_email.php', {"email": booking-email}, function(data) {
						$("#remark4").html('');
						if(data == 1)
						{
							var hasError = true;
							$("#booking-email").css({"background-color" : '#FFB399'});
							$("#booking-email")[0].setCustomValidity('* Email Address Already Exist!');
							$("#remark4").html('<strong title="This field is important!">* Email Address Already Exist!</strong>');
							$("#booking-email").addClass('errorBox');
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
	
	$("#booking-submit-button").click(function() {
		$("#booking-submit-button").attr('disabled', 'disabled'); //alert("hi there");
		var form_error = false;
		var booking_name_error = '';
		var booking_email_error = '';
		var booking_number_error = '';
		var booking_services_error = '';
		var booking_date_error = '';
		var booking_message_error = '';
		
		form_error = validator4('booking-name'); if(form_error){booking_name_error = true;}else{booking_name_error = false;}
			//alert('booking_name = yj');
		//form_error = validator4('booking-email'); if(form_error){booking_email_error = true;}else{booking_email_error = false;}
		booking_email_error = false;
		form_error = validator4('booking-number'); if(form_error){booking_number_error = true;}else{booking_number_error = false;}
		form_error = validator4('booking-services'); if(form_error){booking_services_error = true;}else{booking_services_error = false;}
		form_error = validator4('booking-date'); if(form_error){booking_date_error = true;}else{booking_date_error = false;}
		form_error = validator4('booking-message'); if(form_error){booking_message_error = true;}else{booking_message_error = false;}
		
		if((booking_name_error === true) || (booking_email_error === true) || (booking_number_error === true) || (booking_services_error === true) || (booking_date_error === true) || (booking_message_error === true))
		{
			showError4('Please fill fields marked with asterisk properly');
		}
		else
		{//alert('go11');
		
		    var booking_name = $('#booking-name').val();
		    
			var booking_email = $('#booking-email').val();
			var booking_number = $('#booking-number').val();
			var booking_services = $('#booking-services').val();
			
			var booking_date = $('#booking-date').val();
			var booking_message = $('#booking-message').val();
			
			//alert('booking_name = '+booking_name);
			//alert('booking_email = '+booking_email);
			//alert('booking_number = '+booking_number);
			//alert('booking_services = '+booking_services);
			//alert('booking_date = '+booking_date);
			//alert('booking_message = '+booking_message);
			
			
			$.post('ajax/signup/booking.php',
			{
				"booking_name" : booking_name,
				"booking_email" : booking_email,
				"booking_number" : booking_number,
				"booking_services" : booking_services,
				"booking_date" : booking_date,
				"booking_message" : booking_message
			},
			function(data)
			{//alert('go');
			    $("#contactusbtn").removeAttr('disabled');
			    $('#booking-name').val('');
			    $('#booking-email').val('');
			    $('#booking-number').val('');
			    $('#booking-services').val('');
			    $('#booking-date').val('');
			    $('#booking-message').val('');
			    
        		$("#remark4").show();
        		$('html,body').animate({scrollTop:$("#remark4").offset().top-200}, 'fast');
        		$("#remark4").html('Expect our feedback shortly. Thank you.');
        		$("#remark4").removeClass('remark_error');
        		$("#remark4").addClass('remark_ok');
        		setTimeout(function ()
        		{
        			$("#remark4").fadeOut('slow');
        		},5000);
			});
		}
	});
	
	
	$("#booking-name").change(function(){
		validator4('booking-name');
	});
	
	$("#booking-email").change(function(){
		validator4('booking-email');
	});
	
	$("#booking-number").change(function(){
		validator4('booking-number');
	});
	
	$("#booking-message").change(function(){
		validator4('booking-message');
	});
	
});