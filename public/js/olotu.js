var news_form = $('#newsletter');
news_form.submit(function(event){
	event.preventDefault();
	var news_email = $("#news_email").val();
	if(news_email == '') {
	    alert('Please enter an email address');
	    return;
	}
	if (!validateEmail(news_email)) {
	    alert('Please enter a valid email address');
	    return;
	}
	$("#news_indicator").removeClass("fa-check").addClass("fa-spinner").addClass("fa-spin");
	$.ajax({
		url: urlNewsLetterSubscription,
		method: 'POST',
		data: {email: news_email, _token:token},
		success: function(data) {
		    console.log(data);
		    $("#news_email").val('');
		    $("#news_indicator").removeClass("fa-spinner").removeClass("fa-spin").addClass("fa-check");
		    alert(data.response.message);
		},
		error: function() {
		    $("#news_indicator").removeClass("fa-spinner").removeClass("fa-spin").addClass("fa-check");
		    alert("An error occurred. Please try again");
		}
	});
});

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

$("#sendmessage").on("click", function(event) {
   event.preventDefault();
   var name = $("#name").val();
   var email = $("#email").val();
   var message = $("#message").val();
   var form = $('#main-contact-form');
   var form_status = $('<div class="form_status"></div>');

   if (name == '' || email == '' || message == '') {
       $("#error_message").text("All Fields are Required!");
       $("#success_div").css("display", "none");
       $("#error_div").css("display", "block");
       return;
   }
   
   if (!validateEmail(email)) {
       $("#error_message").text("Please enter a valid email!");
       $("#success_div").css("display", "none");
       $("#error_div").css("display", "block");
       return;
   }
    $("#success_div").css("display", "none");
    $("#error_div").css("display", "none");
   form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
   $.ajax({
        type: "POST",
        url: urlSupportMail,
        data: {name: name, email: email, message: message, _token: token},
        dataType: 'json',
        success: function(data) {
            if(data.response.status == 1) {
                $("#name").val('');
                $("#email").val('');
                $("#message").val('');
                $("#success_message").text(data.response.message);
                form_status.fadeOut();
                $("#error_div").css("display", "none");
                $("#success_div").css("display", "block");
            } else {
                $("#error_message").text(data.response.message);
                form_status.fadeOut();
                $("#success_div").css("display", "none");
                $("#error_div").css("display", "block");
            }
        },
        error: function() {
            $("#error_message").text("An error occurred! Please try again");
            form_status.fadeOut();
            $("#success_div").css("display", "none");
            $("#error_div").css("display", "block");
        }
      });
});

$("#success_close").on("click", function(event) {
   event.preventDefault(); 
   $("#success_div").css("display", "none");
});

$("#error_close").on("click", function(event) {
   event.preventDefault(); 
   $("#error_div").css("display", "none");
});