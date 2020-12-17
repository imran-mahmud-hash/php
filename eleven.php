<?php

  //Database Code Gose here
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'lab_final');

  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if($db == FALSE){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
//End

if(isset($_POST['add_user'])){

          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $password = md5($password);
          $contact = $_POST['contact'];

 
          
 //Data INsert Code is Here
 $sql = "INSERT INTO `registration` ( `name`,  
 `email`, `password`,`contact`) VALUES ('$name','$email',  
  '$password','$contact')"; 
   if($db->query($sql)){
       header('Location:success.php');
   }else{
       echo 'Something Went Wrong';
   }


 
 }





?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="main.css">
</head>
<body>

<form action="eleven.php" method="post">
  <div class="container">
    <h1>User Register Form</h1>

    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <label for="psw"><b>Contact</b></label>
    <input type="text" placeholder="Enter Contact" name="contact" id="psw" required>

     
    <hr>
    

    <button type="submit" class="registerbtn" name="add_user">Register</button>
  </div>
</form>

</body>
</html>
