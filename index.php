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
   <title>register form</title>

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

</head>
<body >
    
    <div >
        <a href="register_form.php"><button type="button" style=" margin-left:75%"><img src="img/register.png"></a></button>
   <a href="login_form.php"><button type="button" style=" margin-left:4%"><img src="img/login.png"></a></button>
    
        </div>
<!--    <img src="img/title.png" style="text-align:center">-->
    <h1 style="text-align:center"> AI Powered Customer Service</h1>
<div class="bg">

     
  
</div>

</body>
</html>