<?php
    include "connection.php";

    $mysqli = dbConnection();

    $username = $_GET['nome'];
    $surname = $_GET['cognome'];
    $email = $_GET['email'];
    $CF = $_POST['CF'];
    $telefono = $_POST['Tel'];
    $immagine = $_FILES['immagine']['name'];

    $result = $mysqli -> query("SELECT * FROM Utenti where email = '$email'");
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result = $mysqli->query("UPDATE Utenti SET CF = '$CF', telefono = '$telefono', immagine = '$immagine' WHERE Utenti.email = '$email'");
        if (!$result) {
         echo "Query failed";
         exit();
         }
        //GESTIONE IMMAGINE-UTENTE
        $target_dir = "../Profilo/img_utenti/";
        $target_file = $target_dir . basename($_FILES["immagine"]["name"]);
        if(preg_match("/.exe$|.com$|.bat$|.zip$|.doc$|.txt$/i", $HTTP_POST_FILES['immagine']['name'])){
            exit("You cannot upload this type of file.");
          }
        //upload del file
        if(is_uploaded_file($_FILES["immagine"]["tmp_name"])) {
            //sposto il file nella cartella desiderata
            if (move_uploaded_file($_FILES["immagine"]["tmp_name"], $target_file)) {
            //if( copy($_FILES['immagine']['tmp_name'], $target_file) ) {
                echo "The file ". htmlspecialchars( basename( $_FILES["immagine"]["name"])). " has been uploaded.";
              } 
            else {
                echo "FAILED";
                exit();
            }
         }
         echo "<script>alert('Informazioni aggiornate con successo')</script>";
         header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$email);
    }else {
        echo 'Cambio credenziali fallito';
        header("refresh:0; url = ../Profilo/profilo.php?nome=".$username."&cognome=".$surname."&email=".$email);
        exit();
    }
?>