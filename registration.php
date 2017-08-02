<!DOCTYPE html>
<html>
<head>
 <link rel="icon" href="icon.ico"> <Title>RIWAMA : Vendor Registration</Title> 
        <!-- Latest Compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>
    <!-- Latest Compiled and minified JavaScript -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/home.js"></script>
<script src="js/jscript.js"></script>  
</head>
<body class="body">
    <div class=" col-md-8" style="border:solid">
    <form class="col-md-8 col-sm-6 col-xs-8" id="sign" name="sign" method="post" onsubmit="return register();"> <!-- action="register.php" -->
     <br>
     
     <fieldset class="col-md-6 col-sm-6 col-xs-6">
         <input type="hidden" name="authType"  id="authType" value="register">
         <div class="form-group has-feedback">
                           
           <input class="form-control" type="text" name="RegNo" id="RegNo" placeholder="Company Registered No." required="required" onkeyup="checkreg();"><i class="glyphicon glyphicon-briefcase form-control-feedback"></i><span class="err" id="err0"> </span>      
            </div> <br>
            <div class="form-group has-feedback">
              
           <input class="form-control" type="text" name="companyname"  id="companyname" placeholder="Company Name" required="required" onkeyup="checkcompany();"><i class="glyphicon glyphicon-user form-control-feedback"></i><span class="err" id="err1"> </span>
                    
            </div> <br>
             <div class="form-group has-feedback ">
           <input class="form-control" type="email" name="companyemail" id="companyemail" placeholder="Company Email" value="" required="required"><i class="glyphicon glyphicon-envelope form-control-feedback"></i><span class="err" id="err2"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="number" min="10" name="telephone" id="telephone" placeholder="Company Phone Number" required="required"><i class="glyphicon glyphicon-phone-alt form-control-feedback"></i><span class="err" id="err3"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="text" name="address" id="address"  placeholder="Company Address" required="required"><i class="glyphicon glyphicon-home form-control-feedback"></i><span class="err" id="err4"></span>
            </div> <br>
             <div class="form-group has-feedback ">
           <input class="form-control" type="text" name="username" id="username" placeholder="Username"   required="required" onkeyup="checkuser();"><i class="glyphicon glyphicon-user form-control-feedback"></i><span class="err" id="err5"></span>
            </div> <br>
             <div class="form-group has-feedback">
            <input class="form-control" type="password" name="password"  id="password" placeholder="Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span class="err" id="err6"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Re-Type Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span class="err" id="err6"></span>
            </div>
         </fieldset>
    
     <br/>
     <br/>
        <div class="regbut col-md-9 col-sm-9 col-xs-10">
          <input type="reset" class="btn btn-md btn-primary col-md-3 col-sm-3 col-xs-4" id="clear" value="Clear" /> 
          <input type="submit" class="btn btn-md btn-primary col-md-3 col-sm-3 col-xs-4" id="submit" name="submit" value="Submit">            
        </div> 
       </form>
    </div>
</body>
</html>
