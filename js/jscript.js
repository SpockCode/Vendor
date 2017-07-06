
function checkreg()
{
 var reg=document.getElementById( "RegNo" ).value;

 if(reg != '')
 {
  $.ajax({
  type: 'post',
  url: 'check.php',
  cache: false,
  data: {
   'vendorID':reg,
  },
  success: function (response) {
   $( '#err0' ).html(response);
   if(response=="Correct")	
   {
    //document.getElementById("err0").innerHTML= " ";
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
  $( '#err0' ).html("");
  return false;
 }
}


function checkuser()
{
 var name=document.getElementById( "username" ).value;

 if(name != '')
//name is always a value u can use this only if name could return null but an input will always return a value might be '' though but will never be null
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
   //document.getElementById("err5").innerHTML= " ";
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
    // document.getElementById("err1").innerHTML= " ";
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





function register(){
    
    var regNo = document.getElementById("RegNo").value;
    var company = document.getElementById("companyname").value;
    var email = document.getElementById("companyemail").value;
    var telephone = document.getElementById("telephone").value;
    var address = document.getElementById("address").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var cpassword= document.getElementById("cpassword").value;
    //var accept= document.getElementById("accept").value;
    
    var reghtml=document.getElementById("err0").innerHTML;
    var namehtml=document.getElementById("err1").innerHTML;
    var userhtml=document.getElementById("err5").innerHTML;

    
         valid = true;
     if (regNo.length <= 5)
     {
        
        document.getElementById("err0").innerHTML= "Company Reg. No. should be more than 5 letters!";
         valid = false;
    } else {  document.getElementById("err0").innerHTML= "";}
    
    if(reghtml=="Correct"||reghtml== " ")
       {
            //document.getElementById("err1").innerHTML= "Company is already registered.";
           valid = true;
       } else { document.getElementById("err0").innerHTML= "A Company is registered with this Number!";
               valid = false; /*document.getElementById("err1").innerHTML= ""; */ }
       

     if (company.length <= 5)
     {
        
        document.getElementById("err1").innerHTML= " Company Name should be more than 5 letters!";
         valid = false;
    } else {  document.getElementById("err1").innerHTML= "";}
    
     if(namehtml=="Correct"||namehtml== " ")
       {
            //document.getElementById("err1").innerHTML= "Company is already registered.";
          
           valid = true;
       } else { document.getElementById("err1").innerHTML= "Company is already registered.";
               valid = false; /*document.getElementById("err1").innerHTML= ""; */ }
       
    
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
     
   if(userhtml=="Correct"||userhtml==" ")
     
       {
           // document.getElementById("err5").innerHTML= "Username  '" + username + "' is taken.";
           
           valid = true;
      }
   else {  document.getElementById("err5").innerHTML= "Username  '" + username + "' is taken.";
         valid=false; /*document.getElementById("err5").innerHTML= ""; */}
    
	if(password.length<=5)
    {
        document.getElementById("err6").innerHTML= "Password should be more than 5 letters!";
        valid = false;
    }
    else if (cpassword!=password){
        
            document.getElementById("err6").innerHTML="Passwords do not match"; 
                valid = false;
        	
	} else { document.getElementById("err6").innerHTML= "";}
   
   /* if(accept.val != "Accept"){
        valid = false;
    } else {valid = true;} */
     
    if (valid){
	        
    
        var data = {'RegisteredNO': regNo,'companyname': company,'companyemail': email,'telephone': telephone,'address': address, 'username': username,'password': password };
		// console.log(data);
		 //console.log('this is data')
            
        $.ajax({
	    //how are you running ur php is it via a server?
		
        url: 'register.php',    //give your url here
        type: 'POST',
       cache: false,
       // async : false,
        data: data,
        error: function(data){
			//console.log(data.message);
			//console.log('error message')
           alert ("Registration Not Complete.");
		},
        success: function(data){

              alert ("Registration Complete.");
        }
		
          //   setTimeout(
          //  function(){
          //      document.getElementById( "sign" ).reset();
         //   },
         //   5
          //s  )

     });
		      

  } else{  alert ("Sorry, Form Failed to Submit."); }//valid = false;
	
 
    return valid;
  
	}




/* LOGIN */


/*
function loguser()
{
 var name=document.getElementById( "username" ).value;
var pass=document.getElementById( "password" ).value;

 if(name != '' && pass != '')
//name is always a value u can use this only if name could return null but an input will always return a value might be '' though but will never be null
 {
  $.ajax({
  type: 'post',
  url: 'login.php',
  cache: false,
  data: {
   'username':name,
   'password':pass,
  },
  success: function (response) {
   $( '#err8' ).html(response);
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
  $( '#err8' ).html("");
  return false;
 }
}

*/



/*
function loguser(){
$(document).on('click', '.btn', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: 'login.php',
        data: $(".log").serialize(),
        success: function(response) {
             if (response === "success") {
                 // window.reload;
                  window.location="dashboard.php";
             } else {
                 
                 document.getElementById("msg").innerHTML= "Invalid Username and Password.  Please try again";
                   //alert("invalid username/password.  Please try again");
             }
        }
    });
});
}

*/



function loguser()
{
 var name=document.getElementById( "username" ).value;
 var pass=document.getElementById( "password" ).value;

 if ((name != '') && (pass != ''))
//name is always a value u can use this only if name could return null but an input will always return a value might be '' though but will never be null
 {
  $.ajax({
  type: 'post',
  url: 'login.php',
  cache: false,
  data: {
   'username':name,
   'password':pass,
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
