<!DOCTYPE html>
<!--
// $thisPage="Home";  -->
<html lang="en">
  <head>
  <!--    <meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>  -->
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
      
    <section class="home"> 
          <header id="header">
            
             <div class="container-fluid col-md-5 col-sm-5 col-xs-5" id="choice">
     <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-2 col-xs-2" id="vlog" value="Login"> 
                 &nbsp; &nbsp;&nbsp;&nbsp;  
          <input class="btn  btn-md btn-primary col-md-2 col-sm-2 col-xs-2" type="submit"  id="vreg" value="Sign Up">
     </div>
    </header>
    
        <div id="welcome">
        <img class="img-circle" src="images/Riwama.png">
        </div>
    </section>
 <section class="signup"> 
         <header id="header">            
             <div class="container-fluid col-md-5 col-sm-5 col-xs-5" id="choice">
    <input type="submit" class="btn btn-md btn-primary col-md-2 col-sm-2 col-xs-2" id="altlog" value="Login"> 
               <!-- &nbsp; &nbsp;&nbsp;&nbsp;  
          <input class="btn  btn-md btn-primary col-md-2" type="submit" src="index.html" value="Home"> -->
     </div>
    </header>
    <br>
    <div class="container col-md-4 col-sm-4 col-xs-4" id="sign">
    <br> 
        <div class="img"> 
          &nbsp;<a href="index.php"><img class="img-thumbnail" src="images/riwamalogo.png"></a>
        </div>
        <br>  <br> 
 <form class="col-md-9 col-sm-9 col-xs-9" id="sign" name="sign" method="post" onsubmit="return register();"> <!-- action="register.php" -->
            <div class="form-group has-feedback">
              
           <input class="form-control" type="text" name="companyname"  id="companyname" placeholder="Enter Company Name" required="required" onkeyup="checkcompany();"><i class="glyphicon glyphicon-user form-control-feedback"></i><span id="err1"> </span>
                    
            </div> <br>
             <div class="form-group has-feedback ">
           <input class="form-control" type="email" name="companyemail" id="companyemail" placeholder="Enter Company Email" required="required"><i class="glyphicon glyphicon-envelope form-control-feedback"></i><span id="err2"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="number" min="10" name="telephone" id="telephone" placeholder="Enter Company Phone Number" required="required"><i class="glyphicon glyphicon-phone-alt form-control-feedback"></i><span id="err3"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="text" name="address" id="address"  placeholder="Enter Company Address" required="required"><i class="glyphicon glyphicon-home form-control-feedback"></i><span id="err4"></span>
            </div> <br>
             <div class="form-group has-feedback ">
           <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username"   required="required" onkeyup="checkuser();"><i class="glyphicon glyphicon-user form-control-feedback"></i><span id="err5"></span>
            </div> <br>
             <div class="form-group has-feedback">
            <input class="form-control" type="password" name="password"  id="password" placeholder="Enter Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span id="err6"></span>
            </div> <br>
            <div class="form-group has-feedback">
            <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Re-Type Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i><span id="err6"></span>
            </div> <br>
           
        <div>
            <input type="submit" class="btn btn-md btn-primary col-md-4 col-sm-4 col-xs-4" id="next" name="next" value="Next">            
           &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;
            <input type="reset" class="btn btn-md btn-primary col-md-4 col-sm-4 col-xs-4" id="next" value="Clear" />  
           </div>
       </form>
       
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
        <form class="col-md-9 col-sm-9 col-xs-9" id="form2">  
           
      <h4 align="left"><b>Services </b></h4>
    
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
        </div> <br>
        
        
        <br>
        <br>
        <div>
            <input type="submit" class="btn btn-md btn-primary col-md-5 col-sm-5 col-xs-5" name="submit" value="Sign Up"> </div>
    </div>
       </form>
     </div> 
    </section>
    
  <section class="login" id="login"> 
          <header id="header">
            
             <div class="container-fluid col-md-5 col-sm-5 col-xs-5" id="choice">
    <input type="submit" class="btn btn-md btn-primary col-md-2" id="altreg" value="Sign Up"> 
              
     </div>
    </header> 
    <div class="container" id="log">
         <a href="index.php"> <img class="img-thumbnail" src="images/Riwama.png"> </a>
        <form class="col-md-10 col-sm-10 col-xs-10" id="log" enctype="application/json">
            <div class="form-group has-feedback ">
           <input class="form-control" type="text" name="companyname" placeholder="Enter Company Name" required="required"><i class="glyphicon glyphicon-user form-control-feedback"></i>
            </div>
            <div class="form-input has-feedback">
            <input class="form-control" type="password" name="Password" placeholder="Enter Password" required="required"><i class="glyphicon glyphicon-lock form-control-feedback"></i>
            </div>
           <div>
             <input type="submit" class="btn btn-md btn-primary col-md-4 col-sm-4 col-xs-4" name="submit" value="Login">
               </div>
            <div id="text"><p> <a> Forgot Password ? </a></p></div>
        </form>
     </div> 
       </section>
 </body>
</html>