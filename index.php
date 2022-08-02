<<<<<<< HEAD
<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM fgusers3 WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO fgusers3(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AI Powered Customer Persona</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
    
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <style>
    body, html {
        height: 100%;
        margin :0;
    }
    .bg {
        margin-top:1%;
        background-image: url("img/frontpage.jpg");
        height: 100%;
/*        background-position: center;*/
        background-size:cover;
        background-repeat: no-repeat;
    }
        
    </style>
    
<!--  IBM Watson Assistant Integration  -->
    
   <script>
       function productsurvey() {
  window.watsonAssistantChatOptions = {
    integrationID: "6604e97a-f00b-4645-a306-59813121b933", // The ID of this integration.
    region: "eu-gb", // The region your integration is hosted in.
    serviceInstanceID: "7197268a-6bc0-4ac3-bfa2-31d326a908e0", // The ID of your service instance.
    onLoad: function(instance) { instance.render(); }
  };
//  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
//  });
       }
       
       $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "Chat Now",
            width: 300,
            height: 150
        });
        $("#btnShow").click(function () {
            $('#dialog').dialog('open');
            
             window.watsonAssistantChatOptions = {
    integrationID: "6604e97a-f00b-4645-a306-59813121b933", // The ID of this integration.
    region: "eu-gb", // The region your integration is hosted in.
    serviceInstanceID: "7197268a-6bc0-4ac3-bfa2-31d326a908e0", // The ID of your service instance.
    showCloseAndRestartButton: true,
     
    onLoad: function(instance) { 
        
        instance.render(); 
        instance.openWindow();
    }
                 
  };
//  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
        
            
        });
    });
       
       
</script>
    

</head>
<body >
    
    <div >
         <a href="index.html" class="logo fleft" style="margin-top:1%;margin-left:5%;position:absolute"><img src="img/company-logo-small.jpg" alt="CWGS website design" / ></a>
        <a href="register_form.php"><button type="button" style=" margin-left:65%"><img src="img/register.png"></a></button>
   <a href="login_form.php"><button type="button" style=" margin-left:2%"><img src="img/login.png"></a></button>
        <input type="image" src="img/chat-now.png" id="btnShow" style="margin-left:2%" value="Show Popup" /> 
<!--    <button type="button" id="btnshow" id="btnshow" style=" margin-left:2%"><img src="img/chat-now.png"></a></button>-->
        </div>
    
<!--
<div id="dialog" style="display: none" align = "center">
    This is a jQuery Dialog.
</div>
-->
<!--    <img src="img/title.png" style="text-align:center">-->
    <h1 style="text-align:center"> AI Powered Customer Service</h1>
<div class="bg">
  
</div>
    
 <div > 

  <p style="color:white">Creative Web Graphic Solutions © 2022. All Rights Reserved </p>
     <p style="padding-left:40%;color:white"> <a href="Termsofuse.html" style="color:blue">Terms of Use</a>  | <a  href="privacypolicy.html" style="color:blue">Privacy Policy</a></p>
      
<!--<a href="#navtop" class="ir">Go up</a> -->
  </div>
    

  </div>
 
</div>    

</body>
=======
<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM fgusers3 WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO fgusers3(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AI Powered Customer Persona</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
    
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <style>
    body, html {
        height: 100%;
        margin :0;
    }
    .bg {
        margin-top:1%;
        background-image: url("img/frontpage.jpg");
        height: 100%;
/*        background-position: center;*/
        background-size:cover;
        background-repeat: no-repeat;
    }
        
    </style>
    
<!--  IBM Watson Assistant Integration  -->
    
   <script>
       function productsurvey() {
  window.watsonAssistantChatOptions = {
    integrationID: "6604e97a-f00b-4645-a306-59813121b933", // The ID of this integration.
    region: "eu-gb", // The region your integration is hosted in.
    serviceInstanceID: "7197268a-6bc0-4ac3-bfa2-31d326a908e0", // The ID of your service instance.
    onLoad: function(instance) { instance.render(); }
  };
//  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
//  });
       }
       
       $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "Chat Now",
            width: 300,
            height: 150
        });
        $("#btnShow").click(function () {
            $('#dialog').dialog('open');
            
             window.watsonAssistantChatOptions = {
    integrationID: "6604e97a-f00b-4645-a306-59813121b933", // The ID of this integration.
    region: "eu-gb", // The region your integration is hosted in.
    serviceInstanceID: "7197268a-6bc0-4ac3-bfa2-31d326a908e0", // The ID of your service instance.
    showCloseAndRestartButton: true,
     
    onLoad: function(instance) { 
        
        instance.render(); 
        instance.openWindow();
    }
                 
  };
//  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
        
            
        });
    });
       
       
</script>
    

</head>
<body >
    
    <div >
        <a href="register_form.php"><button type="button" style=" margin-left:65%"><img src="img/register.png"></a></button>
   <a href="login_form.php"><button type="button" style=" margin-left:2%"><img src="img/login.png"></a></button>
        <input type="image" src="img/chat-now.png" id="btnShow" style="margin-left:2%" value="Show Popup" /> 
<!--    <button type="button" id="btnshow" id="btnshow" style=" margin-left:2%"><img src="img/chat-now.png"></a></button>-->
        </div>
    
<!--
<div id="dialog" style="display: none" align = "center">
    This is a jQuery Dialog.
</div>
-->
<!--    <img src="img/title.png" style="text-align:center">-->
    <h1 style="text-align:center"> AI Powered Customer Service</h1>
<div class="bg">

     
  
</div>

</body>
>>>>>>> e85453e52cfa12b7785be2d20c4cb41168533ee6
</html>