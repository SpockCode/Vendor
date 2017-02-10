
<html>
<head>
<Title> RIWAMA </Title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/bootstrap-theme.css" rel="stylesheet"/>
<script src="js/jquery.js"> </script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"> </script>  
<script src="js/core.js"></script>
<!--<Div class="container-fluid"><br> <p><b><h1 class="jumbotron" align='center' style="background:lightgreen">E-Sense Technologies</h1></b></p></Div> -->
      <?php
//require("header.php"); // include header content

     ?> 
</head>
 <Body style="background:lightblue"> 
    <div class="container-fluid col-md-2">
        
        <div class="panel panel-info" style="">
            <blockquote align="center"><b><h2>RIWAMA</h2><small>Rivers State Waste Management Agency</small></b></blockquote>
            
            </div>            
        
         </div> 
     
     <div class="container-fluid col-md-3">
      <div class="panel">
            <form id="vendorreg" align ="center" method="post">
                <blockquote align="center"><b><h3><u>VENDOR REGISTRATION</u></h3></b></blockquote>
     <!--<form id="vendorsignup" action="/Vendor/" method="post" enctype="multipart/form-data" class="ng-pristine ng-valid"> -->
 <!--<input type="hidden" name="csrfmiddlewaretoken" value="">  -->
<div class="mainsearch"><input type="text" name="Company" id="company" placeholder="Name of Company"><i class="fa fa-institution src"></i></div> <br/>
<div class="mainsearch"><input type="email" name="email" id="email" placeholder="Company's Email address"><i class="fa fa-envelope src"></i></div> <br/>
<div class="mainsearch"><input type="password" name="password" id="password" placeholder="Password"><i class="fa fa-lock src"></i></div> <br/>
<div class="mainsearch"><input type="password" id="passwordconfirm" placeholder="Retype password"><i class="fa fa-lock src"></i></div> <br/>
<div class="mainsearch"><input type="text" name="Telephone" id="telephone" placeholder="Telephone Number"><i class="fa fa-phone src"></i></div> <br/>
<div class="mainsearch"><input type="text" name="address" id="address" placeholder="Company address"><i class="fa fa-lock src"></i></div> <br/>
<button class="btn-info btn-md" onclick="register()">Submit</button>

                
                
</form>
                  
        </div>
     </div>
 </Body> 
<?php 
  include("footer.php"); // include footer content 

?>
</html>

<!--#428bce"-->