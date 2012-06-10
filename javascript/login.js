// JavaScript Document

$(document).ready(function(){   
    signup();
}); 

function signup(){
	$('#signup_button').click(function(){
		//alert('click');
		window.location = 'http://localhost/grange_ci/index.php/display/signup';
	});
}