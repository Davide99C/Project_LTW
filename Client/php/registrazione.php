<?php
    include "connection.php";

    $mysqli = dbConnection();

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $pass = $_POST['password1'];


    $hash = md5($pass);

    //TROPPO COMPLICATO PER FARE IL CONFRONTO CON LA PASSOWRD DEL DATABASE POICHE LA FUNZIONE
    //DI HASH BCRYPT GENERA UNA STRINGA SEMPRE RANDOMICA E QUINDI DIVERSA DA QUELLA GENERATA AL 
    //MOMENTO DELLA REGISTRAZIONE (USO MD5 PERCHÈ VIENE GENERATA UNA PASSWORD CRIPTATA FISSA)
    /*$options = [
        'cost' => 10
     ];
    $hash = password_hash($pass, PASSWORD_BCRYPT, $options);*/


   $result = $mysqli -> query("SELECT * FROM Utenti where email = '$email'");
   $count = mysqli_num_rows($result);

   if($count == 0){
       $result = $mysqli->query("INSERT INTO Utenti (nome, cognome, data_di_nascita, email, password) VALUES ('$nome','$cognome','$data','$email','$hash')");
       if (!$result) {
        echo "Query failed";
        exit();
        }
        echo "<script language=javascript> alert('Account creato correttamente. Clicca ok per continuare')</script> ";
        $ok = "<h1 style='color:red'>Account creato correttamente</h1><h2>Attendi un istante e verrai reinderizzato alla pagina di login</h2>";
        echo "$ok";
        header("refresh:2; url = ../Login/login.html " );
   }else{
        echo "<script language=javascript> alert('Account gia esistente!. Clicca ok per tornare alla pagina di registrazione')</script> ";
       $error = "<h1 style='color:red'>Account gia esistente!</h1><h2>Attendi un istante e verrai reinderizzato alla pagina di registrazione</h2>";
       echo"$error";
       header("refresh:2; url = ../Registrazione/registrazione.html " );
   }
?>