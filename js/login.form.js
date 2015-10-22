$(function() {


	/*
	number of div
	*/
	var divCount = $('#loginForm').children().length;


	/*
	current position of fieldset / navigation link
	*/
	var current = 1;
	
	/*
	to avoid problems in IE, focus the first input of the form
	*/
	$('#loginForm').children(':first').find(':input:first').focus();	

	/*
	validates errors on all the fieldsets
	records if the Form has errors in $('#formElem').data()
	*/

	function validateDivs()
	{
		var FormErrorslog = false;
		for(var i = 1; i < divCount; i++){
			var error = validateDiv(i);
			if(error == -1)
				FormErrorslog = true;
		}
		$('#loginForm').data('errors',FormErrorslog);	
	}
	
	/*
	validates one fieldset
	and returns -1 if errors found, or 1 if not
	*/

var ck_username = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var ck_password =  /^[A-Za-z0-9!@#?$%^&*()_]{4,20}$/;



	function validateDiv(step)
	{
		if(step == divCount) return;
		
		var error = 1;
		var hasError = false;
		$('#loginForm').children(':nth-child('+ parseInt(step) +')').find(':input:not(button)').each(function(){
			
			var $this 		= $(this);
			var currentId = $(this).attr('id');
			var valu= jQuery.trim($this.val());

			var valueLength = jQuery.trim($this.val()).length;
			
			
		if (currentId=='userlogin')
			{
				
				if (!ck_username.test(valu)  || valueLength == '')
				
					{
						hasError = true;
						$("#userlw").show();
					
					}
					else
					{
						$("#userlw").hide();
						

					}
			}
		
		 else if (currentId=='passlogin' )
			{
				if (!ck_password.test(valu) || valueLength == '')
					{
						hasError = true;
						
						$("#passlw").show();
					}
				else
					{
						$("#passlw").css("display", "none");
						
					}
			}
			
				
		});
		if(hasError){
			error = -1;
	
		}
		return error;
	}
	

	/*
	if there are errors don't allow the user to submit
	*/
	
	$('#submit2').bind('click',function(){
		validateDivs()
		
		if($('#loginForm').data('errors'))
		
		{
			alert('Please correct the errors in the Form');
			return false;
		}
		
			
			
	});
});