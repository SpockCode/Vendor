
/* Validate Registration Form */  


/*
// We define the function
function checkusername(){
    	
    
  var username = document.getElementById('username');
  var message = document.getElementById('err5');
  
  /*This is just to see how it works, remove this lines*/
  //message.innerHTML = username.value;
 // document.getElementById("send").disabled = true;  
  /*********************************************/

/*
 $.ajax({ 
    url : "check.php",// your username checker url
    type : "POST",
    data : {username: username},        
    success:  function (response) {						
        if (response==0)
        {
              message.innerHTML = "Valid Username";
              document.getElementById("next").disabled = false;		
	}
	if (response==1)
	{
              message.innerHTML = "Already Used";
              document.getElementById("next").disabled = true;	
   	}
					
							
     }
 });					
}

/*

$(document).ready(function(){
   // We call the function
    checkusername();
  
});

*/


/*
$(document).ready(function() {
    $('#err5').load('check.php').show();
    
    $('#username').keyup(function(){
       var enteredValue=$(this).val();   //this).val :- element that is referenced in the convering functions..in this case  $('#username')
    $.post('check.php', {username: enteredValue },
              function(result){
        
        $('#err5').html(result).show();
       // $("next").disabled = true;	
                     //  $('#err5').show();
                     // $('#err5').html(result);
        });
});
    }); 




$(document).ready(function() {
    $('#err1').load('check.php').show();
    
    $('#companyname').keyup(function(){
       var enteredValue=$(this).val();   //this).val :- element that is referenced in the convering functions..in this case  $('#username')
    $.post('check.php', {companyname: enteredValue },
              function(result){
        
        $('#err1').html(result).show();
                     //  $('#err5').show();
                     // $('#err5').html(result);
        });
});
    }); 

*/


function checkuser()
{
 var name=document.getElementById( "username" ).value;
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'check.php',
  cache: false,
  data: {
   username:name,
  },
  success: function (response) {
   $( '#err5' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#err5' ).html("");
  return false;
 }
}


function checkcompany()
{
 var company=document.getElementById( "companyname" ).value;
    var msg="OK";
	
 if(company)
 {
  $.ajax({
  type: 'post',
  url: 'check.php',
  data: {
   companyname:company,
  },
      cache: false,
  success: function (response) {
   $( '#err1' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#err1' ).html("");
  return false;
 }
}









function  register(){
    
  
    var company = document.getElementById("companyname").value;
    var email = document.getElementById("companyemail").value;
    var telephone = document.getElementById("telephone").value;
    var address = document.getElementById("address").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var cpassword= document.getElementById("cpassword").value;
    
    var namehtml=document.getElementById("err1").innerHTML;
    var userhtml=document.getElementById("err5").innerHTML;

    
         valid = true;

     if (company.length <= 5)
     {
        
        document.getElementById("err1").innerHTML= " Company Name should be more than 5 letters!";
         valid = false;
    } else {  document.getElementById("err1").innerHTML= "";}
    
     if(namehtml!="OK")
       {
            document.getElementById("err1").innerHTML= "Company is registered.";
           valid = false;
       } else {  document.getElementById("err1").innerHTML= ""; }
       
    
     //if ($(company).val() != ''){ }
       
    if (telephone.length<=10)
        {
           document.getElementById("err3").innerHTML= "Please, Fill in a correct Phone Number !";  
            valid = false;
        } else { document.getElementById("err3").innerHTML= "";}
 
    
     if(address.length <= 10){
          document.getElementById("err4").innerHTML= "Please, Fill in a correct Address !"; 
         valid = false;
     } else { document.getElementById("err4").innerHTML= "";}

	if(username.length<=5)
    {
		 document.getElementById("err5").innerHTML= "Username should be more than 5 letters!";
        valid = false;
      
	} else { document.getElementById("err5").innerHTML= "";}
     
   if(userhtml!="OK")
     
       {
            document.getElementById("err5").innerHTML= "Username is taken.";
           valid = false;
       }
   else { document.getElementById("err5").innerHTML= "";}
    
	if(password.length<=5)
    {
        document.getElementById("err6").innerHTML= "Password should be more than 5 letters!";
        valid = false;
    }
    else if (cpassword!=password){
        
            document.getElementById("err6").innerHTML="Passwords do not match"; 
                valid = false;
        	
	} else { document.getElementById("err6").innerHTML= "";}
   
    /* if((namehtml && userhtml)=="OK")
 {
  return true;
    
 }
 else
 {
  return false;
 }
    */ 
    
    if (valid){
		//alert("true so send via ajax");
		
		//var data;
		
		
		//for some reasons i dont know of, serialize is not working so im going by the manual way
		//data=$("#sign").serialize();
		
	//var data = "companyname='" + companyname +"'; companyemail='" + companyemail +"'; telephone='" + telephone +"'; address='"+ address +"'; username='"+ username + "'; password='"+ password +"';";
        
        
    
        var data = {'companyname': company,'companyemail': email,'telephone': telephone,'address': address, 'username': username,'password': password };
		
                
		//alerting the values of data before sending
		 //alert(data);
        
        
          $.ajax({
        url: 'register.php',    //give your url here
        type: 'POST',
               cache: false,
        data: data,
           
        //error: function(data){
        //  alert(data);    do your stuff
            
          // alert ("Sorry, Error.");
        //},
        success: function(data){
        //  alert(data);    do your stuff
              alert ("Registration Complete.");
        },

     });
		      

  } else{  alert ("Sorry, Form Failed to Submit."); }
	
    form.next.disabled = true;
    return valid;
    /*  
	  var data=$("#sign").serialize();
    
 
   // AJAX Code To Submit Form.
		$.ajax({
			type: "POST",
			url: "register.php",
			data: data,
			cache: false,
			error: function(result)
            {alert
            (result)},
			success: function(result){
				if(result=="success"){
					window.location='.login';
					alert("Registration Successful, Please Select Services You Render")
				}else{
					alert(result);
				}
			}
		});   */
        

	}



