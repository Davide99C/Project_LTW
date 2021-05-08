<?php
    include "connection.php";

    $mysqli = dbConnection();

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $pass = $_POST['password1'];


   $result = $mysqli -> query("SELECT * FROM Utenti where email = '$email'");
   $count = mysqli_num_rows($result);
   // $row = mysqli_fetch_array($result);

   if($count == 0){
       $result = $mysqli->query("INSERT INTO Utenti (nome, cognome, data_di_nascita, email, password) VALUES ('$nome','$cognome','$data','$email','$pass')");
       if (!$result) {
        echo "Query failed";
        exit();
    }
       $ok = "<h1 style='color:red'>Account creato correttamente</h1><h2>Attendi un istante e verrai reinderizzato alla pagina di login</h2>";
       echo "$ok";
       header("refresh:2; url = ../Login/login.html " );
   }else{
       $error = "<h1 style='color:red'>L'account gia esiste!</h1><h2>Attendi un istante e verrai reinderizzato alla pagina di registrazione</h2>";
       //die($error) ;
       echo"$error";
       header("refresh:2; url = ../Registrazione/registrazione.html " );
   }
?>