<?php
    include "connection.php";

    $mysqli = dbConnection();

    $username = $_GET['nome'];
    $surname = $_GET['cognome'];
    $email = $_GET['email'];
    $CF = $_POST['CF'];
    $telefono = $_POST['Tel'];
    //$immagine = $_GET['cognome'];

    $result = $mysqli -> query("SELECT * FROM Utenti where email = '$email'");
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result = $mysqli->query("UPDATE Utenti SET CF = '$CF', telefono = '$telefono' WHERE Utenti.email = '$email'");
        if (!$result) {
         echo "Query failed";
         exit();
         }
         echo "alert('Informazioni aggiornate con successo')";
         header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$email);
    }else {
        echo 'Cambio credenziali fallito';
        header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$email);
        exit();
    }
?>