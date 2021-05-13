<?php
    include "connection.php";

    $mysqli = dbConnection();

    $email = $_POST['inputEmail'];
    $username = $_GET['nome'];
    $surname = $_GET['cognome'];

    $result = $mysqli -> query("SELECT * FROM Newsletter where email = '$email'");
    $count = mysqli_num_rows($result);

    if($count == 0){
        $result = $mysqli->query("INSERT INTO Newsletter (email) VALUES ('$email')");
        if (!$result) {
         echo "Query failed";
         exit();
         }
         echo "
            <script language=javascript> 
            var x = new URLSearchParams(window.location.search);
            var username = x.get('nome');console.log(username);
            var surname = x.get('cognome');console.log(surname);
            if (username && surname) {
                window.location.href = '../index.html?nome=".$username."&cognome=".$surname."&email=".$email."';
            }
            alert('Grazie per esserti iscritto alla nostra Newsletter!. Clicca ok per tornare alla pagina principale')</script> 
            ";
        header("refresh:0; url = ../index.html" );
    }else {
        echo "
            <script language=javascript>
            var x = new URLSearchParams(window.location.search);
            var username = x.get('nome');console.log(username);
            var surname = x.get('cognome');console.log(surname);
            if (username && surname) {
                window.location.href = '../index.html?nome=".$username."&cognome=".$surname."&email=".$email."';
            }
            alert('Ti sei gia iscritto alla nostra Newsletter!. Clicca ok per tornare alla pagina principale')</script> 
            ";
        header("refresh:0; url = ../index.html" );
    }
    
?>


<!--
<html>
    <?php 
    /*
    include "connection.php";

    $mysqli = dbConnection();

    $email = $_POST['inputEmail'];

    $result = $mysqli -> query("SELECT * FROM Newsletter where email = '$email'");
    $count = mysqli_num_rows($result);

    if($count == 0){
        $result = $mysqli->query("INSERT INTO Newsletter (email) VALUES ('$email')");
        if (!$result) {
            echo "Query failed";
            exit();
        }
        ?>
        <div id = "success">
            <?php
            echo "<script language=javascript> alert('Grazie per esserti iscritto alla nostra Newsletter!. Clicca ok per tornare alla pagina principale')</script> ";
            header("refresh:0; url = ../index.html" );
            ?>
        </div>
        <div id = "failure"> 
            <?php
                }else {
                echo "<script language=javascript> alert('Ti sei gia iscritto alla nostra Newsletter!. Clicca ok per tornare alla pagina principale')</script> ";
                header("refresh:20; url = ../index.html" );
                }
            ?>
        </div>
    <script>
            var x = new URLSearchParams(window.location.search);
            var username = x.get('nome');console.log(username);
            var surname = x.get('cognome');console.log(surname);
            if (username && surname) {
                document.getElementById("success").innerHTML = "&#60;?php echo '<script language=javascript> alert('Grazie per esserti iscritto alla nostra Newsletter!. Clicca ok per tornare alla pagina principale')</script> ';header('refresh:0; url = ../index.html?nome="+username+'&cognome='+surname+"' );?>";
                document.getElementById("failure").innerHTML = "&#60;?php echo '<script language=javascript> alert('Ti sei gia iscritto alla nostra Newsletter!. Clicca ok per tornare alla pagina principale')</script> ';header('refresh:0; url = ../index.html?nome="+username+'&cognome='+surname+"' );?>";
            }
    </script>
</html>
*/