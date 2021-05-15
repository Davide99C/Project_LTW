<?php
    include "connection.php";

    $mysqli = dbConnection();

    $username = $_GET['nome'];
    $surname = $_GET['cognome'];
    $old = $_POST['old-psw'];
    $new = $_POST['new-psw'];
    $email = $_GET['email'];

    $hash_old = md5($old);
    $hash_new = md5($new);

    $result = $mysqli -> query("SELECT password FROM Utenti where email = '$email' and password='$hash_old'");
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result = $mysqli->query("UPDATE Utenti SET password = '$hash_new' WHERE Utenti.email = '$email'");
        if (!$result) {
         echo "Query failed";
         exit();
         }
        
         echo "<script>alert('Password aggiornata con successo')</script>";
         header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$email);
    }else {
        echo "<script>alert('Cambio password fallito: la tua vecchia password non corrisponde')</script>";
        header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$email);
        exit();
    }

?>