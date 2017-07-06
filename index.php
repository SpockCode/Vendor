<!DOCTYPE html>
<!--
// $thisPage="Home";  -->
<html lang="en">
  <head>
 <meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="icon.ico"> <Title>RIWAMA : Vendor</Title> 
        <!-- Latest Compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>
    <!-- Latest Compiled and minified JavaScript -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/home.js"></script>
<script src="js/jscript.js"></script>


<!--<nav class="head container-fluid">
    <Div class="container-fluid" id="head"><br> <p><b><h1> RIWAMA <small>- Rivers State Waste Management Agency</small></h1></b></p></Div>
    </nav>
     <br/> -->
</head>
<body class="body">
      <div class="">
    <section class="home"  > 
          <header id="header">
           <!--   <div class="container-fluid col-md-5 col-sm-6 col-xs-6" id="admin">
              <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-2 col-xs-6" id="admin" value="Admin">
              </div>
            
             <div class="container-fluid col-md-5 col-sm-6 col-xs-6" id="choice">
                 
    <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-2 col-xs-6" id="vlog"  value="Login">                  
    <input class="btn  btn-md btn-primary col-md-2 col-sm-2 col-xs-6" type="submit"  id="vreg" value="Sign Up">
                 
     </div> -->
              
              <div class="container-fluid col-md-12 col-sm-12 col-xs-12" id="head">
              <input type="submit" class="admin btn btn-md btn-primary col-md-1 col-sm-1 col-xs-3" id="admin" value="Admin" > <!--location.href='admin.php' -->
                           
    <input type="submit" class="btn btn-md btn-primary col-md-0 col-sm-1 col-xs-3" id="vlog"  value="Login">                  
    <input class="btn  btn-md btn-primary col-md-0 col-sm-1 col-xs-3" type="submit"  id="vreg" value="Sign Up">
     
              </div>
    </header>
    
        <div id="welcome">
        <img class="img-circle" src="images/Riwama.png">
        <blockquote class="quote"> Rivers State Waste Management Agency</blockquote>
        </div>
    </section>
 <section class="signup" style="display:none"> 
         <header id="header">            
             <div class="container-fluid col-md-5 col-sm-7 col-xs-11" id="choice">
    <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-3 col-xs-3" id="altlog" value="Login"> 
                       <input type="submit" class="admin btn btn-md btn-primary col-md-2 col-sm-2 col-xs-3" id="admin" value="Admin">
              
     </div>
    </header>
    
    <div class="container col-md-4 col-sm-4 col-xs-12" id="sign">
    <br> 
        <div class="img"> 
          &nbsp;<a href="index.php"><img class="img-thumbnail" src="images/riwamalogo.png" id="img"></a>
             <blockquote class="regform"><a href="index.php">Registration Form </a></blockquote>
        </div>
 <form class="col-md-12 col-sm-9 col-xs-12" id="sign" name="sign" method="post" onsubmit="return register();"> <!-- action="register.php" -->
     <br>
     
     <fieldset class="col-md-9 col-sm-9 col-xs-9">
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
     <!-- <div class="checkbox col-md-12 col-sm-12 col-xs-12" id="accept">
          <label>  I accept the <a>Terms of Service</a> and <a>Privacy Policy</a>
            <input type="checkbox" value="Accept" id="accept">
           
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>            
          </label>
        </div> <br/> -->
     <br/>
        <div class="regbut col-md-9 col-sm-9 col-xs-10">
          <input type="reset" class="btn btn-md btn-primary col-md-3 col-sm-3 col-xs-4" id="clear" value="Clear" /> 
          <input type="submit" class="btn btn-md btn-primary col-md-3 col-sm-3 col-xs-4" id="submit" name="submit" value="Submit">            
        </div> 
       </form>
     <!--   <script type="text/javascript">
                 document.getElementById("sign").reset();
</script> -->
       
     </div> 
    </section>
    
    <section class="next" id="sec" style="display:none"> 
         <header id="header">            
             <div class="container-fluid col-md-5 col-sm-5 col-xs-5" id="choice">
    <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-2 col-xs-3" id="altlog2" value="Login"> 
                  <input type="submit" class="admin btn btn-md btn-primary col-md-2 col-sm-2 col-xs-3" id="admin" value="Admin">
             
     </div>
    </header> 
        &nbsp; &nbsp; &nbsp; &nbsp;
    <div class="container col-md-4 col-sm-4 col-xs-4" id="next">
          <a href="index.php"><img class="img-circle" src="images/riwamalogo.png"></a>
        <form class="col-md-9 col-sm-10 col-xs-10" id="form2">  
           
      <h5>Please, Select from the list, Services that you provide;</h5>
    
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="Home Services">
               Home Services
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>          
          </label> 
        </div> <br>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="Sweeper">
            Sweeper
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>          
          </label>
        </div> <br>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="Waste Evacuation" >
            Waste Evacuation
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>            
          </label>
            </div><br>
         <div class="checkbox">
          <label>
        <input type="checkbox" value="De-Silting" >
               De-Silting
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                </label>
        </div>  <br> &nbsp;
        <div class="checkbox">
          <label>
        <input type="checkbox" value="Toxic Waste" >
               Toxic Waste
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                </label>
        </div> <br> 
        
                  <br>
        <div class="done">
            
            <input type="submit" class="btn btn-md btn-primary col-md-5 col-sm-5 col-xs-5" name="submit" value="Sign Up"> </div>
    </div>
       </form>
        
      
     </div> 
    </section>
    
  <section class="login" id="login" style="display:none"> 
          <header id="header">       <div class="container-fluid col-md-5 col-sm-7 col-xs-11" id="choice">
    <input type="submit" class="btn btn-md btn-primary col-md-2" id="altreg" value="Sign Up"> 
               <input type="submit" class="admin btn btn-md btn-primary col-md-2 col-sm-2 col-xs-3" id="admin" value="Admin">
              
     </div>
    </header>
  <!--   <div class="log" style="background: gray">
         <div class="textadmin col-md-4 col-sm-4 col-xs-4" ><br/><br/> <h3> Not a Vendor? &nbsp; <br/> <span class="line"> <input type="button" class="btn btn-danger col-md-2 col-sm-2 col-xs-3" id="navadmin" value="Login"/> &nbsp; as an Administrator.</span> </h3><br/></div> </div>
-->
    <div class="container" id="log">
         <a href="index.php" id="logimg"> <img class="img-thumbnail" src="images/Riwama.png"> </a>  <br><br>
        <form class="log col-md-10 col-sm-10 col-xs-10" id="log"  method="post" action="login.php"> <!--enctype="application/json" -->
            
            <!-- <blockquote class="logform"><a href="index.php"><span class="glyphicon glyphicon-login">Login</span> </a></blockquote> -->
           <div id="msg"> Invalid Username and Password!  Please try again. </div>
           <div id="msg1"> Enter Username and Password. </div>
            <div class="form-group has-feedback">
                <input type="hidden" name="authType" id="authType" value="login">
                <input type="hidden" name="usertype" id="usertype" value="vendor">
            <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username" required="required"><i class="glyphicon glyphicon-user form-control-feedback"></i><span class="" id="err8"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span class="" id="err9"></span>
            </div> <br>
           <!-- <div class="form-group col-md-8 col-sm-8 col-xs-7" id="select">  
               <select class="form-control" id="usertype"  name="usertype" required="required">
                <option value="">-User Type- </option>
                <option  value="vendor"> Vendor </option>
                <option  value="admin"> Admin </option>
               </select> 
            </div> <br> -->
             <div id="text"><p> <a href="RetrievePassword.html"> Forgot Password ? </a></p>
          
             <input type="submit" class="btn btn-md btn-primary col-md-4 col-sm-4 col-xs-4" id="login" name="submit" value="Login" >
               </div>  <br>
           
        </form> <br> <br>
        
       <!-- </div> -->
     </div> 
<!--
    </section>
           <section class="login" id="login" style="display:none"> 
          <header id="header">       <div class="container-fluid col-md-5 col-sm-7 col-xs-11" id="choice">
  
               <input type="submit" class="vendor btn btn-md btn-primary col-md-2 col-sm-2 col-xs-3" id="vendor" value="Vendor">
              
     </div>
    </header>
     <!-- <div class="log">
      <div class="textadmin col-md-4 col-sm-4 col-xs-4" ><br/><br/> <h3>&nbsp; Not a Vendor? &nbsp; <br/>  <input type="button" class="btn btn-danger col-md-2 col-sm-2 col-xs-3" id="navadmin" value="Login"/> &nbsp; as an Administrator. </h3><br/></div> -->
<!--
      <div class="container" id="log">
         <a href="index.php"> <img class="img-thumbnail" src="images/Riwama.png"> </a>  <br><br>
        <form class="log col-md-10 col-sm-10 col-xs-10" id="log"  method="post" action="login.php"> <!--enctype="application/json" -->
            
            <!-- <blockquote class="logform"><a href="index.php"><span class="glyphicon glyphicon-login">Login</span> </a></blockquote> -->
      
<!--
            <div id="msg"> Invalid Username and Password!  Please try again. </div>
           <div id="msg1"> Enter Username and Password. </div>
            <div class="form-group has-feedback">
            <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username" required="required"><i class="glyphicon glyphicon-user form-control-feedback"></i><span class="" id="err8"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span class="" id="err9"></span>
            </div> <br>
           <!-- <div class="form-group col-md-8 col-sm-8 col-xs-7" id="select">  
               <select class="form-control" id="usertype"  name="usertype" required="required">
                <option value="">-User Type- </option>
                <option  value="vendor"> Vendor </option>
                <option  value="admin"> Admin </option>
               </select> 
            </div> <br> -->
<!--     
      <div id="text"><p> <a href="RetrievePassword.html"> Forgot Password ? </a></p>
          
             <input type="submit" class="btn btn-md btn-primary col-md-4 col-sm-4 col-xs-4" id="login" name="submit" value="Login" >
               </div>  <br>
           
        </form> <br> <br>
    

      </div> 
       </section>
   -->     
 </body>
</html>