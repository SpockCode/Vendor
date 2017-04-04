
/* Validate Registration Form */  


$(document).ready(function() {
    $('#err5').load('check.php').show();
    
    $('#username').keyup(function(){
       var enteredValue=$(this).val();   //this).val :- element that is referenced in the convering functions..in this case  $('#username')
    $.post('check.php', {username: enteredValue },
              function(result){
        
        $('#err5').html(result).show();
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






function  register(){
    
  
    var company = document.getElementById("companyname").value;
    var email = document.getElementById("companyemail").value;
    var telephone = document.getElementById("telephone").value;
    var address = document.getElementById("address").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var cpassword= document.getElementById("cpassword").value;
    
         valid = true;

     if (company.length <= 5)
     {
        
        document.getElementById("err1").innerHTML= " Company Name should be more than 5 letters!";
         valid = false;
    } else {  document.getElementById("err1").innerHTML= "";}
         
       
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
     
   
	if(password.length<=5){
        document.getElementById("err6").innerHTML=" Password should be more than 5 letters!";
        
        valid = false;}
    else if (cpassword!=password){
        
            document.getElementById("err6").innerHTML="Passwords do not match"; 
                valid = false;
        
	
	} else { document.getElementById("err6").innerHTML= "";}
   
    
     
    
    if (valid=true){
		//alert("true so send via ajax");
		
		//var data;
		
		
		//for some reasons i dont know of, serialize is not working so im going by the manual way
		//data=$("#sign").serialize();
		
	var data = "companyname='" + companyname +"'; companyemail='" + companyemail +"'; telephone='" + telephone +"'; address='"+ address +"'; username='"+ username + "'; password='"+ password +"';";
		
		//alerting the values of data before sending
		 alert(data);
        
        
          $.ajax({
        url: "register.php",    //give your url here
        type: "POST",
        cache: false,
        data: data,
        success: function(data){
        //  alert(data);    do your stuff
              alert ("Registration Complete")
        },
        error: function(data){
        //  alert(data);    do your stuff
            
           alert ("Sorry, Error.")
        }
    });
		      
      
        
        
    
    } else{  alert ("Sorry, Form Failed to Submit."); }
	
    
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



