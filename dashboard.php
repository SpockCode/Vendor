<?php
   //include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.ico"> <Title>RIWAMA : Dashboard</Title> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link  rel="stylesheet" href="css/dashboard.css"/> 
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css" />

<script src="js/jquery.js"> </script>
<script src="js/dashboard.js"> </script>
    <script src="js/catalog.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"> </script>  
<!--<script src="js/core.js"></script> -->
    
</head>
<body style="background-color: #B4B9C2">
      <div class="dashboard main-section-body col-md-12" data-role="main"> <!-- style="background-color: #B4B9C2" -->
        
	    
<div class="container-fluid" id="head">
	       
             <div id="header">
                <span> <a href="index.html"> <img class="img-circle" href="ïndex.html" src="images/Riwama.png"></a></span>
	              <!-- Logo --> 
    
    <div class="logo"> 
	                 <h4><b><a href="index.html"><blockquote>RIWAMA<small>Rivers State Waste Management Agency</small></blockquote> </a></b></h4>
	              </div>	          
	                         
                 <div class="dropdown">
                     <button class="btn dropdown-toggle" data-toggle="dropdown" > My Account <b class="caret"></b> </button>
                     <ul class="dropdown-menu">
                          <li><a href="dashboard.html"><span class="glyphicon glyphicon-dashboard">&nbsp;</span>Profile</a></li>
                                <li class="divider"></li>
	                          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;</span>Logout</a></li>
                         
                     </ul>                   
                   </div>
                  </div>
    </div>
        <br/><br/> <br/> <br/> <br/>
        
        
<div class="panel-body" id="body">
    
        <div class="sidebar col-md-2 ">
            
             <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>                        
      </button>
   
    </div>
            
<div class="collapse navbar-collapse" id="myNavbar">
          
<ul class="nav nav-pills nav-stacked" id="nav"> <!-- -->
  <!--<li><a class="select" id="navdashboard" href="dashboard.html" data-toggle="pill"><span class="glyphicon glyphicon-dashboard"></span> Dashboard </a></li>
   <li><a id="navservices" data-toggle="pill"><span class="glyphicon glyphicon-asterisk"></span> Services </a></li> -->
    
    <li><a class="btn" id="navvendor" href="" data-toggle="pill"><span class="glyphicon glyphicon-user"></span> Vendor </a></li> 
    <li><a class="btn" id="navsession" href="" data-toggle="pill"><span class="glyphicon glyphicon-eye-open"></span> Session </a></li>
    <li><a class="btn" id="navManageShifts" href="" data-toggle="pill"><span class="glyphicon glyphicon-time"></span> Manage Shifts  </a></li>
     <li><a class="btn" id="navmessages" href=""  data-toggle="pill"><span class="glyphicon glyphicon-envelope"></span> Messages </a></li>
      <li><a class="btn" id="navreport" href="" data-toggle="pill"><span class="glyphicon glyphicon-file"></span> Report </a></li>
   </ul>
            </div>
  </div>
        
         <div class="content"> 
         
           <section id="dashboard">
                  
               <div class="home">
        <h1> Dashboard </h1> ... View your details here </p> <br/>
           
           </div> 
          
               <div class="row">
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Vendor Profile </div> 
      <div class="box-panel" id="div1">
         <em><b> Company Name:</b></em> <br>
         <em><b> Company Address:</b></em> <br>
         <em><b> Company Telephone: </b></em> <br>
          <em><b> Company Email: </b></em> <br>
          <em><b> Services </b></em>
             
             <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
            
           
            
         </div>
 </div>
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Vendor Assets </div>
      <div class="box-panel" id="div1">
<table  class="table table-striped" id="demo"></table>
         <!-- <embed src="cd_catalog.xml" /> -->
             </div>
 </div>
  
        </div>
               
    
               <div class="row">
                <div class="div0 col-md-12" id="box"> 
   <div class="box-top">Zones </div>
      <div class="box-panel">
          <table  class="table table-striped" id="zones">
              <thead>
              <tr>
              <th> Zones</th>
              <th> Description</th>
              </tr>
              </thead>
              <tbody> 
                  
        <tr class="clickable" data-toggle="collapse" data-target=".zoneA">
            <td>Zone A</td>
            <td> Ogunabali, Amadi-Flats, Garrison</td>
        </tr>
        <tr class="collapse zoneA">
           <td><em><b> &nbsp;&nbsp;Receptacle Points:</b></em></td>
             <td> Garrison Bus Stop</td>
        </tr>
        <tr class="collapse zoneA">
            <td>&nbsp;</td>
            <td>Nzimiro Street</td>
        </tr>
        <tr class="collapse zoneA">
            <td>&nbsp;</td>
            <td> CFC Bus Stop</td>
        </tr>
        <tr class="collapse zoneA">
            <td>&nbsp;</td>
            <td> Ogunabali Market</td>
        </tr>

        <tr class="clickable" data-toggle="collapse" data-target=".zoneB">
            <td>Zone B</td>
            <td>Mile One, Mile Two, Mile Three</td>
        </tr>
        <tr class="collapse zoneB">
           <td><em><b>&nbsp;&nbsp; Receptacle Points: </b></em></td>
             <td> Emenike Bus Stop</td>
        </tr>
        <tr class="collapse zoneB">
           <td>&nbsp;</td>
            <td> Mile One Park</td>
        </tr>
        <tr class="collapse zoneB">
           <td>&nbsp;</td>
            <td> Mile One Market</td>
        </tr> 
          <tr class="collapse zoneB">
           <td>&nbsp;</td>
            <td> Mile Two Market</td>
        </tr> 
          <tr class="collapse  zoneB">
           <td>&nbsp;</td>
            <td> Mile Three Market</td>
        </tr> 
              </tbody>
                      
          </table>
       
         </div>
 </div>
           
    </div>  
          </section>
<section id="services"> 
        <div class="home">
        <h1> Services </h1> ... What we provide </p> <br/>
           
           </div> 
                         <div class="row">
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Lorem Ipsum </div> 
      <div class="box-panel" id="div1">
        Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
          
          
         </div>
 </div>
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Lorem Ipsum </div>
      <div class="box-panel" id="div1">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
       Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
        </div>
    
               <div class="row">
                <div class="div0 col-md-12" id="box"> 
   <div class="box-top">Lorem Ipsum </div>
      <div class="box-panel" id="div0">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
           
    </div>     
</section>
           
<section id="vendor"> 
        <div class="home">
        <h1> Vendor </h1> ... Who we work with </p> <br/>
           
           </div> 
  
    
               <div class="row">
                <div class="div0  col-md-12  col-sm-12 col-xs-12" id="box"> 
   <div class="box-top">Lorem Ipsum </div>  
      <div class="box-panel" id="div0">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
           
    </div> 
           
</section>
    
    <section id="session"> 
            <div class="home">
        <h1> Session </h1> ... Your session </p> <br/>
           
           </div> 
                          <div class="row">
           <div class="div0 col-md-12  col-sm-12 col-xs-12" id="box"> 
   <div class="box-top"> Current Sessions</div> 
      <div class="box-panel" id="div0">
        Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
           <div class="div0 col-md-12 col-sm-12 col-xs-12" id="box"> 
   <div class="box-top"  id="searchbox">
       <div class="searchname" id="search1"> Archived Sessions </div> 
     <!--  <div class="inline-group-addon">
        <input class="search" type="search"/>
       <input class="search" type="date"/>  
       </div> -->
     <!--  <form class="navbar-form navbar-right" role="search">
     <div class="form-group" id="search">
           <input class="form-contol" type="Date">
       <div class="input-group-btn" id="search">
         <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
           </div> 
           </div>
           </form> -->
        <div class="form-horizontal col-md-8 col-sm-8 col-xs-10" id="search"> 
       <form class="navbar-form navbar-right" id="searchform" role="search">
  <div class="form-group">
    <input type="date" class="input-group form-control" id="searchtxt" >
  </div>
  <button class="btn btn-info input-group" id="searchbtn" type="submit" ><span class="glyphicon glyphicon-search"></span></button>
      
</form>
       </div>
    </div>
      <div class="box-panel" id="div0">
      <table  class="table table-striped" id="archiv"></table>
          
              </div>
 </div>
        </div>
    
    
</section>
<section id="ManageShifts">
        <div class="home">
        <h1> Shifts </h1> ... Staff shifts </p> <br/>
           
           </div> 
                       <div class="row">
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Lorem Ipsum </div> 
      <div class="box-panel" id="div1">
          
        Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
          
         </div>
 </div>
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Lorem Ipsum </div>
      <div class="box-panel" id="div1">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
       Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
        </div>
    
               <div class="row">
                <div class="div0 col-md-12" id="box"> 
   <div class="box-top">Lorem Ipsum </div>
      <div class="box-panel" id="div0">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
           
    </div> 
    
</section>
<section id="messages">
        <div class="home">
        <h1> Messages </h1> ... View your messages here </p> <br/>
           
           </div> 
   <!--                    <div class="row">
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Lorem Ipsum </div> 
      <div class="box-panel">
        Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
           <div class="div2 col-md-6" id="box"> 
   <div class="box-top">Lorem Ipsum </div>
      <div class="box-panel">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
       Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
        </div> -->
    
               <div class="row">
                <div class="div0 col-md-12  col-sm-12 col-xs-12" id="box"> 
   <div class="box-top">Lorem Ipsum </div>
      <div class="box-panel" id="div0">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
           
    </div> 
           
</section>
<section id="report"> 
        <div class="home">
        <h1> Report </h1> ... Generate Reports here </p> <br/>
           
           </div> 
                         <div class="row">
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Lorem Ipsum </div> 
      <div class="box-panel" id="div1">
        Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
           <div class="div1 col-md-6" id="box"> 
   <div class="box-top">Lorem Ipsum </div>
      <div class="box-panel" id="div1">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br />
       Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
        </div>
    
               <div class="row">
                <div id="box"> 
   <div class="box-top">Lorem Ipsum </div>
      <div class="box-panel">
       Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
         </div>
 </div>
           
    </div> 
           
</section>
           
  
  </div> 
</div></div> 

</body>
       
  <!--         
<nav class="navbar navbar-fixed-bottom">

    <div class=" container-fluid navbar-footer" style="background-color: white">
  
        <p class="navbar-text" align="center"><b> RIWAMA &copy; <i> Powered by </i> E-Sense Technologies </b></p>
   
   
    </div>
</nav> --> 
&nbsp;&nbsp; &nbsp;    
    <nav class="navbar navbar-default navbar-fixed-bottom">
           <b> <p class="navbar-text"> E-Sense Technologies &copy; 2017 </p> </b>    
     
</nav>


  
</html>