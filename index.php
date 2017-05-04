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
<body>
      <div class="">
    <section class="home"> 
          <header id="header">
            
             <div class="container-fluid col-md-5 col-sm-7 col-xs-11" id="choice">
     <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-2 col-xs-3" id="vlog"  value="Login"> 
              
              
                   
          <input class="btn  btn-md btn-primary col-md-2 col-sm-2 col-xs-3" type="submit"  id="vreg" value="Sign Up">
     </div>
    </header>
    
        <div id="welcome">
        <img class="img-circle" src="images/Riwama.png">
        <blockquote class="quote"> Rivers State Waste Management Agency</blockquote>
        </div>
    </section>
 <section class="signup"> 
         <header id="header">            
             <div class="container-fluid col-md-5 col-sm-7 col-xs-11" id="choice">
    <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-3 col-xs-3" id="altlog" value="Login"> 
              
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
            <div class="form-group has-feedback">
              
           <input class="form-control" type="text" name="companyname"  id="companyname" placeholder="Enter Company Name" required="required" onkeyup="checkcompany();"><i class="glyphicon glyphicon-user form-control-feedback"></i><span class="err" id="err1"> </span>
                    
            </div> <br>
             <div class="form-group has-feedback ">
           <input class="form-control" type="email" name="companyemail" id="companyemail" placeholder="Enter Company Email" value="" required="required"><i class="glyphicon glyphicon-envelope form-control-feedback"></i><span class="err" id="err2"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="number" min="10" name="telephone" id="telephone" placeholder="Enter Company Phone Number" required="required"><i class="glyphicon glyphicon-phone-alt form-control-feedback"></i><span class="err" id="err3"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="text" name="address" id="address"  placeholder="Enter Company Address" required="required"><i class="glyphicon glyphicon-home form-control-feedback"></i><span class="err" id="err4"></span>
            </div> <br>
             <div class="form-group has-feedback ">
           <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username"   required="required" onkeyup="checkuser();"><i class="glyphicon glyphicon-user form-control-feedback"></i><span class="err" id="err5"></span>
            </div> <br>
             <div class="form-group has-feedback">
            <input class="form-control" type="password" name="password"  id="password" placeholder="Enter Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span class="err" id="err6"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Re-Type Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span class="err" id="err6"></span>
            </div>
         </fieldset>
       <div class="checkbox col-md-12 col-sm-12 col-xs-12" id="accept">
          <label>  I accept the <a>Terms of Service</a> and <a>Privacy Policy</a>
            <input type="checkbox" value="Accept" >
           
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>            
          </label>
        </div>
              <div class="regbut col-md-9 col-sm-9 col-xs-10">
           <input type="reset" class="btn btn-md btn-primary col-md-3 col-sm-3 col-xs-4" id="clear" value="Clear" /> 
            <input type="submit" class="btn btn-md btn-primary col-md-3 col-sm-3 col-xs-4" id="next" name="next" value="Next">            
        </div>
       </form>
     <!--   <script type="text/javascript">
                 document.getElementById("sign").reset();
</script> -->
       
     </div> 
    </section>
    
    <section class="next" id="sec"> 
         <header id="header">            
             <div class="container-fluid col-md-5 col-sm-5 col-xs-5" id="choice">
    <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-2 col-xs-2" id="altlog2" value="Login"> 
             
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
        <input type="checkbox" value=" Desinting" >
               Desinting
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
    
  <section class="login" id="login"> 
          <header id="header">       <div class="container-fluid col-md-5 col-sm-5 col-xs-5" id="choice">
    <input type="submit" class="btn btn-md btn-primary col-md-2" id="altreg" value="Sign Up"> 
              
     </div>
    </header>
    <div class="container" id="log">
         <a href="index.php"> <img class="img-thumbnail" src="images/Riwama.png"> </a>  <br><br>
        <form class="col-md-10 col-sm-10 col-xs-10" id="log" > <!--enctype="application/json" -->
            
            <!-- <blockquote class="logform"><a href="index.php"><span class="glyphicon glyphicon-login">Login</span> </a></blockquote> -->
            
            <div class="form-group has-feedback">
            <input class="form-control" type="text" name="companyname" placeholder="Enter Company Name" required="required"><i class="glyphicon glyphicon-user form-control-feedback"></i><span class="" id="err8"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="password" name="Password" placeholder="Enter Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span class="" id="err9"></span>
            </div> <br>
            <div class="form-group col-md-8 col-sm-8 col-xs-7" id="select">  
               <select class="form-control">
                <option default> - Select - </option>
                <option  value="vendor"> Vendor </option>
                <option  value="riwama"> RIWAMA</option>
               </select> 
            </div> <br>
             <div id="text"><p> <a href="RetrievePassword.html"> Forgot Password ? </a></p>
          
             <input type="submit" class="btn btn-md btn-primary col-md-4 col-sm-4 col-xs-4" name="submit" value="Login">
               </div>  <br>
           
        </form> <br> <br>
     </div> 
       </section>
        <!--   </div> body -->
 </body>
</html>