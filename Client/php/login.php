<?php
    include "connection.php";

    $mysqli = dbConnection();

    $email = $_POST['email'];
    $pass = $_POST['password'];


   $result = $mysqli -> query("SELECT * FROM Utenti where email = '$email' AND password = '$pass'");
   $count = mysqli_num_rows($result);
   // $row = mysqli_fetch_array($result);

   if($count == 1){
       echo "ok";
   }else{
       $error = "Your Login Name or Password is invalid";
       die($error) ;
   }
?>