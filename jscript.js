
/* Validate Registration Form */  


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
    }
         
       
    if (telephone.length<=10)
        {
           document.getElementById("err3").innerHTML= "Please, Fill in a correct Phone Number !";  
            valid = false;
        }
 
    
     if(address.length <= 10){
          document.getElementById("err4").innerHTML= "Please, Fill in a correct Address !"; 
         valid = false;
     }

	if(username.length<=5)
    {
		 document.getElementById("err5").innerHTML= "Username should be more than 5 letters!";
        valid = false;
      
	}
     
   
	if(password.length<=5){
        document.getElementById("err6").innerHTML=" Password should be more than 5 letters!";
        
        valid = false;
	
	}
    if (cpassword!=password){
        
 document.getElementById("err6").innerHTML="Passwords do not match"; 
        valid = false;
  
    }
  
	
        return valid;
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
		});  
        

	}




   /* 
   
   
   
         
  $("#next").click(function(){
        $(".home").hide();
        $(".login").hide();
         $(".signup").hide();
        $(".next").show();
    });
   /*
   
   
   
    var company =  document.getElementById("companyname").value;
   var email = document.getElementById("companyemail").value;
    var telephone = document.getElementById("telephone").value;
    var address = document.getElementById("address").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var cpassword= document.getElementById("cpassword").value;

*/
