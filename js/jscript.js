

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
   'username':name,
  },
  success: function (response) {
   $( '#err5' ).html(response);
   if(response=="Correct")	
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
  	
 if(company)
 {
  $.ajax({
  type: 'post',
  url: 'check.php',
  data: {
   'companyname':company,
  },
      cache: false,
  success: function (response) {
   $( '#err1' ).html(response);
   if(response=="Correct")	
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
    
     if(namehtml!="Correct")
       {
            document.getElementById("err1").innerHTML= "Company is already registered.";
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
     
   if(userhtml!="Correct")
     
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
   
     
    if (valid){
	        
    
        var data = {'companyname': company,'companyemail': email,'telephone': telephone,'address': address, 'username': username,'password': password };
		
            
        $.ajax({
        url: 'register.php',    //give your url here
        type: 'POST',
        cache: false,
        data: data,
        success: function(data){
              alert ("Registration Complete.");
        },

     });
		      

  } else{  alert ("Sorry, Form Failed to Submit."); }//valid = false;
	
 
    return valid;
  
	}



