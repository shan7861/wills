$('document').ready(function(){
 var memberid_state = false;
 var email_state = false;
 $('#memberid').on('blur', function(){
  var memberid = $('#memberid').val();
  if (memberid == '') {
  	memberid_state = false;
  	return;
  }
  $.ajax({
    url: 'register.php',
    type: 'post',
    data: {
    	'memberid_check' : 1,
    	'memberid' : memberid,
    },
    success: function(response){
      if (response == 'taken' ) {
      	memberid_state = false;
      	$('#memberid').parent().removeClass();
      	$('#memberid').parent().addClass("form_error");
      	$('#memberid').siblings("span").text('Sorry... memberid already taken');
      }else if (response == 'not_taken') {
      	memberid_state = true;
      	$('#memberid').parent().removeClass();
      	$('#memberid').parent().addClass("form_success");
      	$('#memberid').siblings("span").text('Username available');
      }
    }
  });
 });
  $('#email').on('blur', function(){
 	var email = $('#email').val();
 	if (email == '') {
 		email_state = false;
 		return;
 	}
 	$.ajax({
      url: 'register.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	if (response == 'taken' ) {
          email_state = false;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_error");
          $('#email').siblings("span").text('Sorry... Email already taken');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#email').parent().removeClass();
      	  $('#email').parent().addClass("form_success");
      	  $('#email').siblings("span").text('Email available');
      	}
      }
 	});
 });

 $('#reg_btn').on('click', function(){
 	var memberid = $('#memberid').val();
 	var email = $('#email').val();
 	var password = $('#password').val();
 	if (memberid_state == false || email_state == false) {
	  $('#error_msg').text('Fix the errors in the form first');
	}else{
      // proceed with form submission
      $.ajax({
      	url: 'register.php',
      	type: 'post',
      	data: {
      		'save' : 1,
      		'email' : email,
      		'memberid' : memberid,
      		'password' : password,
      	},
      	success: function(response){
      		alert('user saved');
      		$('#memberid').val('');
      		$('#email').val('');
      		$('#password').val('');
      	}
      });
 	}
 });
});
