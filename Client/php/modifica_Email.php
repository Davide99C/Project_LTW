<?php
    include "connection.php";

    $mysqli = dbConnection();

    $username = $_GET['nome'];
    $surname = $_GET['cognome'];
    $old = $_POST['old-email'];
    $new = $_POST['new-email'];

    $result = $mysqli -> query("SELECT email FROM Utenti where email = '$old'");
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result = $mysqli->query("UPDATE Utenti SET email = '$new' WHERE email = '$old'");
        if (!$result) {
         echo "Query failed";
         exit();
         }
        
         echo "<script>alert('email aggiornata con successo')</script>";
         header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$new);
    }else {
        echo "<script>alert('Cambio email fallito: la tua vecchia email non corrisponde')</script>";
        header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$old);
        exit();
    }

?>