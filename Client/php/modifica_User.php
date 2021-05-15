<?php
    include "connection.php";

    $mysqli = dbConnection();

    $username = $_GET['nome'];
    $surname = $_GET['cognome'];
    $new_name = $_POST['new-name'];
    $new_surname = $_POST['new-surname'];
    $email = $_GET['email'];


    $result = $mysqli -> query("SELECT nome ,cognome FROM Utenti where email = '$email'");
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result = $mysqli->query("UPDATE Utenti SET nome = '$new_name', cognome = '$new_surname' WHERE email = '$email'");
        if (!$result) {
         echo "Query failed";
         exit();
         }
        
         echo "<script>alert('Nome e Cognome aggiornati con successo')</script>";
         header("refresh:0; url = ../Profilo/profilo.php?nome=".$new_name."&cognome=".$new_surname."&email=".$email);
    }else {
        echo "<script>alert('Cambio credenziali fallito')</script>";
        header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$email);
        exit();
    }

?>