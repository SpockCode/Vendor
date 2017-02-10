
function register() {
	var company = $("#company").val();
	var email =$("#email").val();
	var password = $("#password").val();    
	var passwordconfirm=$("#passwordconfirm").val();
	var telephone =$("#telephone").val();
	var address =$("#address").val();
	

	
	var error='Check ';
	if (company ==""){error+='\r Company Name';}
	if (email ==""){error+='\r Company Email';}
    if (telephone ==""){error+='\r Company Telephone Number';}
    if (address ==""){error+='\r Company Address';}
	//if(cardnumber==''){error +="Credit Card Number";}
	if (passwordconfirm==password){}else{alert("Passwords do not match");return;}
    if(company.length<5||company==''){
		error+='\r Company Name: should be greater than 5 characters.';
	}
	//if(username.length<5||username==''){
	//	error+='\r Username: should be greater than 5 characters.';
	//}
	//if(password.length<5 || password==''){
	//	error+='\r Password: should be greater than 5 characters';
	//}
	if(error.length>6){
		alert(error);
		return;
	}else{
	var data=$("#vendorreg").serialize();
alert(data + " <= data reg");