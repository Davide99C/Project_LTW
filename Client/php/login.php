<?php
    include "connection.php";

    $mysqli = dbConnection();

    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];
    
    $hash = md5($pass);

    //TROPPO COMPLICATO PER FARE IL CONFRONTO CON LA PASSOWRD DEL DATABASE POICHE LA FUNZIONE
    //DI HASH BCRYPT GENERA UNA STRINGA SEMPRE RANDOMICA E QUINDI DIVERSA DA QUELLA GENERATA AL 
    //MOMENTO DELLA REGISTRAZIONE (USO MD5 PERCHÈ VIENE GENERATA UNA PASSWORD CRIPTATA FISSA)
    /*$options = [
        'cost' => 10
     ];
     $hash = password_hash($pass, PASSWORD_BCRYPT, $options);
    
     /*if (!password_verify($pass,$hash)) {
        echo "PASSWORD NON CORRETTA";
        header("refresh:2; url = ../Login/login.html  ");
     }*/

    $result = $mysqli -> query("SELECT * FROM Utenti where email = '$email' AND password = '$hash'");
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "<script language=javascript> alert('Login effettuato con successo. Clicca ok per continuare')</script> ";
        //$ok = "<h1 style='color:red'> Login effettuato con successo</h1><h2>Attendi un instante e verrai reinderizzato alla pagina principale</h2>";
        //echo "$ok";
        $row = $result->fetch_array();
        $nome = $row[0];
        $cognome = $row[1];
        $stringa_url = "refresh:0; url = ../index.html?"."nome=".$nome."&cognome=".$cognome."&email=".$email;
        header($stringa_url);
    }else{
        echo "<script language=javascript> alert('Email o password non corretta. Clicca ok per tornare alla pagina di login')</script> ";
        //$error = "<h1 style='color:red'>Email o password non corretta </h1><h2>Attendi un instante e verrai reinderizzato alla pagina di login</h2>";
        //echo "$error";
        header("refresh:0; url = ../Login/login.html  ");
    }
     
    


   
?>