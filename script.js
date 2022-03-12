$('document').ready(function(){
 var memberid_state = false;
 $('#memberid').on('blur', function(){
  var memberid = $('#memberid').val();
  if (memberid == '') {
  	memberid_state = false;
  	return;
  }
  $.ajax({
    url: '../Marriedwithminor.php',
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
      	$('#memberid').siblings("span").text('memberid available');
      }
    }
  });
 });		

 $('#input-submit').on('click', function(){
 	var memberid = $('#memberid').val();
 	if (memberid_state == false) {
	  $('#error_msg').text('Fix the errors in the form first');
	}else{
      // proceed with form submission
      $.ajax({
      	url: '../Marriedwithminor.php',
      	type: 'post',
      	data: {
      		'save' : 1,
      		'memberid' : memberid,
      	},
      	success: function(response){
      		alert('user saved');
      		$('#memberid').val('');
      	}
      });
 	}
 });
});