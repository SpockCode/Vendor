<!DOCTYPE html>
<html>
<head>  
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.ico"> <Title>RIWAMA : Admin </Title> 
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

<body>
    <section class="login" id="login"> 
          <header id="header">       <div class="container-fluid col-md-5 col-sm-7 col-xs-11" id="choice">
  
               <input type="submit" class="vendor btn btn-md btn-primary col-md-2 col-sm-2 col-xs-3" id="vendor" value="Home">
              
     </div>
    </header>
     <!-- <div class="log">
      <div class="textadmin col-md-4 col-sm-4 col-xs-4" ><br/><br/> <h3>&nbsp; Not a Vendor? &nbsp; <br/>  <input type="button" class="btn btn-danger col-md-2 col-sm-2 col-xs-3" id="navadmin" value="Login"/> &nbsp; as an Administrator. </h3><br/></div> -->
    <div class="container" id="log">
         <a href="index.php"> <img class="img-thumbnail" src="images/Riwama.png"> </a>  <br><br>
        <form class="log col-md-10 col-sm-10 col-xs-10" id="log"  method="post" action="login.php"> <!--enctype="application/json" -->
            
            <!-- <blockquote class="logform"><a href="index.php"><span class="glyphicon glyphicon-login">Login</span> </a></blockquote> -->
           <div id="msg"> Invalid Username and Password!  Please try again. </div>
           <div id="msg1"> Enter Username and Password. </div>
             <div class="form-group has-feedback">
            <input type="hidden" name="authType" id="authType" value="login">
                <input type="hidden" name="usertype" id="usertype" value="admin">
            </div>
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
             <div id="text"><p> <a href="RetrievePassword.html"> Forgot Password ? </a></p>
          
             <input type="submit" class="btn btn-md btn-primary col-md-4 col-sm-4 col-xs-4" id="login" name="submit" value="Login" >
               </div>  <br>
           
        </form> <br> <br>
        
       <!-- </div> -->
     </div> 
       </section>
</body>
</html>