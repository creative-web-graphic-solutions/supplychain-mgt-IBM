
<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>IT Infrastructure Management - CIO's Desk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/dashboardstyle.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    
    <style>
     *{margin: 0px; padding: 0px; font-size: 15px; list-style: none}
        html, body{ background-color: #16F5E8; width: 100%; height:100%; position: relative;}
        .header{ height:20%; background:blue; position: relative;}
        .page-footer{
        position: fixed;
  margin-left: 0;
  bottom: 0;
  width: 100%;
  background-color: blue;
  color: white;
/*  text-align: center;*/
  padding-left: 14%;            
    }    
        
/*        .footer{ height:35%; background:blue;bottom:0; position: absolute; width: 100%}*/
        
*/

   
    </style>    
     	
	
</head>
<body>
	<header class="cd-main-header">
<!--		<a href="#0" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>-->
		<a id="logo-container" href="index.html" class="brand-logo" style="color: white"></a>
        <img src="img/b2bbanner.jpg" style="width:100%; ">
		
		
	</header> <!-- .cd-main-header -->
    
    
    
   <div class="content" style="Text-align:Center">
       <a href="logout.php" class="btn" style="float:right">logout</a>
      <h3>Hi, <span>Admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
       
    
<!--
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
-->
       
   </div>
<p style="margin-left:5%"> How can I help you today?</p> </br>
    
    <div class="row">
            
            
             <button type="button" style=" margin-left:10%"><img src="img/stock2.png"></button>
            <button type="button" style="margin-top:2%; margin-left:2%"><img src="img/purchase2.png"></button>   
                <button type="button" style="margin-top:2%; margin-left:2%"><img src="img/inventory2.png"></button>
                <button type="button" style="margin-top:2%; margin-left:2%"><img src="img/alerts2.png"></button>
            
		</div> <!-- .content-wrapper -->
	

   
     <footer class="page-footer" >
 
      <div class="row">
        <div class="col-sm-6 ">
          <h5 class="white-text">AI Powered Customer Persona Creation</h5>
          
        </div>
        <div class="col-sm-3 ">
          
        </div>
       
      </div>
</footer>
 
      
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>