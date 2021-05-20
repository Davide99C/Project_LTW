<html>
    <head>
        <title> Profilo </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../aux.css" />
        <script type="text/javascript" lang="javascript" src="profilo.js"> </script>
        <link rel="stylesheet" type="text/css" href="profilo.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body >
        <!--HEADER-->
        <header id="menu">
            <ul id="menu-1">
                <li>
                    <a href="#" onclick="openNav()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                        </div>
                    </a>
                    <div id="comparsa" class="men">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="../Gofishing/gofishing.html" role="button" class="btn"> GO FISHING </a><br>
                        <a href="../Store/store.html" role="button" class="btn"> NEGOZIO </a><br>
                        <a href="../Galleria/galleria.html" role="button" class="btn"> GALLERIA </a><br>
                        <a href="../Faq/faq.html" role="button" class="btn"> FAQ </a><br>
                        <a href="../ChiSiamo/chisiamo.html" role="button" class="btn"> CHI SIAMO </a>
                    </div>
                </li>
            </ul>
            <ul id="menu-center">
                <a href="../index.html" role="button" class="img"> <img src="../img/logo.png"> </a>
            </ul>
            <ul id="menu-2">
                <a href="../index.html" role="button" id="accesso" class="btn" > HOME </a>
            </ul>
        </header>
        <!---->

        <!--LOADING SCREEN-->
        <div id="loading_screen">
            <div id="caricamento">
                <div width="100" height="100" viewBox="0 0 24 24">
                    <img class="image-spin" src="../img/loading.png" style="height:150px; width:150px;">
                    <!--<path d="M21,9H15V22H13V16H11V22H9V9pV7H21M12,2A2,2 0 0,1 14,4A2,2 0 0,1 12,6C10.89,6 10,5.1 10,4C10,2.89 10.89,2 12,2Z" />
                    -->
                </div><br>
                <h1>Loading...</h1>
                <p>La pagina è in caricamento<br />
                    Resta connesso e non cambiare sito!</p>
            </div>
        </div>

        <!-- GESTIONE PROFILO -->
        <div id="main">
            <section id="centro">
                <div id="funzioni">
                  <button type="button" class="btn-profilo" id="btn-gestione" onclick="apriGestione()" >Gestione Profilo</button>  <br>
                  <button type="button" class="btn-profilo" id="btn-password" onclick="apriPassword()" >Cambia Password</button>  <br>
                  <button type="button" class="btn-profilo" id="btn-email" onclick="apriEmail()" >Cambia E-mail</button>  <br>
                  <button type="button" class="btn-profilo" id="btn-usernane" onclick="apriUsername()" >Cambia Username</button>    <br>
                  <a href="../index.html" ><button type="button" class="btn-profilo" id="btn-logout" > Log out</button> </a><br>
                </div>
                <div id="gestione">
                    <div id="img-profilo">
                        <img id="image-utente" src="img_utenti/44948.png" style="height:200px; width:200px;" ><br><br>
                        <form action='../php/profilo.php' method="POST" enctype="multipart/form-data" id="info">
                                <p>Nome: </p>
                                <p>Cognome: </p>
                                <p>E-mail: </p>
                                <p id="Data">Data di nascita:  </p>
                                <p>Codice Fiscale:<input type="text" name="CF" id="CF" maxlength="16" pattern="[A-Z]{6}[0-9]{2}[A-Z][0-9]{2}[A-Z][0-9]{3}[A-Z]" ></p>
                                <p>Telefono:<input type="text" name="Tel" id="Tel" maxlength="40" pattern="([0-9]{10})" ></p>
                                <p>Cambia immagine del profilo:<input id="change-img" type="file" name="immagine"></input></p>
                                <p>Bio: &nbsp;<textarea id="bio" name="bio"></textarea></p>
                                <input type="submit" value="Invia">
                                <input type="reset" value="Reset">
                                <br>
                        </form>
                    </div>
                </div>
                <div id="change-password">
                    <form action='../php/modifica_Psw.php' method="POST" id="info1" onsubmit="return validatePassword()">
                        <p>Vecchia Password: <input type='text' id="old-password" name="old-psw"></input></p>
                        <p>Nuova Password: <input type='password' id="new-password" name="new-psw"></input></p>
                        <span class="sign_error"></span>
                        <p>Conferma Password: <input type='password' id="new-password2" name="new-psw2"></input></p>
                        <span class="sign_error"></span>
                        <input type="submit" value="Invia">
                        <input type="reset" value="Reset">
                    </form>
                </div>
                <div id="change-email">
                    <form action='../php/modifica_Email.php' method="POST" id="info2">
                        <p>Vecchia Email: <input type='text' id="old-email" name="old-email"></input></p>
                        <p>Nuova Email: <input type='text' id="new-email" name="new-email"></input></p>
                        <input type="submit" value="Invia">
                        <input type="reset" value="Reset">
                    </form>
                </div>
                <div id="change-username">
                    <form action='../php/modifica_User.php' method="POST" id="info3">
                        <p>Nuovo Nome: <input type='text' id="new-name" name="new-name"></input></p>
                        <p>Nuovo Cognome: <input type='text' id="new-surname" name="new-surname"></input></p>
                        <input type="submit" value="Invia">
                        <input type="reset" value="Reset">
                    </form>
                </div>
            </section>   
        </div>

         <!--FOOTER-->
        <footer id="footer">
            <ul id="imagefooter">
                <img src="../img/White-logo.png">
            </ul>

            <ul id="menufooter">
                <a href="../ChiSiamo/chisiamo.html" role="button" class="btn"> CHI SIAMO </a><br>
                <a href="../Store/store.html" role="button" class="btn"> NEGOZIO </a><br>
                <a href="../Privacy/privacy.html" role="button" class="btn"> PRIVACY POLICY </a><br>
            </ul>

            <ul id="social">
                <label> Facebook: WildFishing </label>
                <br>
                <label> Instagram: @wildfishing </label>
                <br>
                <label> Telefono: ********** </label>
                <br>
                <label> E-mail: wildfishing@hotmail.it </label>
            </ul>
        </footer>
        <!---->
        <script>
            var x = new URLSearchParams(window.location.search);
            var username = x.get('nome');console.log(username);
            var surname = x.get('cognome');console.log(surname);
            var email = x.get('email');console.log(email);
            var immagine = x.get('immagine');
            if (username && surname) {
                document.getElementById("menu-2").innerHTML = "<a href='../index.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' id='accesso' class='btn' >HOME</a>";
                document.getElementById("menu-center").innerHTML = "<a href='../index.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='img'> <img src='../img/logo.png'> </a>";
                document.getElementById("comparsa").innerHTML = "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a><a href='../Gofishing/gofishing.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> GO FISHING </a><br><a href='../Store/?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> NEGOZIO </a><br><a href='../Galleria/galleria.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> GALLERIA </a><br><a href='../Faq/faq.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> FAQ </a><br><a href='../ChiSiamo/chisiamo.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> CHI SIAMO </a>"
                document.getElementById("menufooter").innerHTML = "<a href='../ChiSiamo/chisiamo.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> CHI SIAMO </a><br><a href='../Store/?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> NEGOZIO </a><br><a href='../Privacy/privacy.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn' > PRIVACY POLICY </a><br>";
                document.getElementById("info").action = "../php/profilo.php?nome="+username+'&cognome='+surname+'&email='+email;
                document.getElementById("info").innerHTML = "<p>Nome: "+username+"</p><p>Cognome: "+surname+"</p><p>E-mail: "+email+"</p><p id='Data'>Data di nascita: </p><p>Codice Fiscale: <input type='text' name='CF' id='CF' maxlength='16' pattern='[A-Z]{6}[0-9]{2}[A-Z][0-9]{2}[A-Z][0-9]{3}[A-Z]' ></p><p>Telefono: <input type='text' name='Tel' id='Tel' maxlength='40' pattern='([0-9]{10})' ></p><p>Cambia immagine del profilo: <input id='change-img' type='file'  name='immagine'></input></p><p>Bio: <textarea id='bio' name='bio' ></textarea></p><input type='submit' value='Invia'><input type='reset' value='Reset'><br>";
                document.getElementById("info1").action = "../php/modifica_Psw.php?nome="+username+"&cognome="+surname+"&email="+email;
                document.getElementById("info2").action = "../php/modifica_Email.php?nome="+username+"&cognome="+surname+"&email="+email;
                document.getElementById("info3").action = "../php/modifica_User.php?nome="+username+"&cognome="+surname+"&email="+email;
            }else {
                alert("ERRORE: non puoi accedere all'area di gestione del profilo senza aver effettuato l'accesso");
                window.location.href = '../index.html';
            }
        </script>
  
        <?php
            include "../php/connection.php";
            $mysqli = dbConnection();
            $email = $_GET['email'];
            
            $result = $mysqli -> query("SELECT data_di_nascita FROM Utenti where email = '$email'");
            if (!$result) {
                echo "Query failed";
                exit();
                }
            $data = $result->fetch_assoc()['data_di_nascita'];
            
            echo "<script> document.getElementById('Data').innerHTML='Data di nascita: ".$data."' </script>";
            
            $result = $mysqli -> query("SELECT CF FROM Utenti where email = '$email'");
            if (!$result) {
                echo "Query failed";
                exit();
            }
            $CF = $result->fetch_assoc()['CF'];
            echo "<script> document.getElementById('CF').value='".$CF."'</script>";

            $result = $mysqli -> query("SELECT telefono FROM Utenti where email = '$email'");
            if (!$result) {
                echo "Query failed";
                exit();
            }
            $telefono = $result->fetch_assoc()['telefono'];
            echo "<script>document.getElementById('Tel').value='".$telefono."' </script>";

            $result = $mysqli -> query("SELECT immagine FROM Utenti where email = '$email'");
            if (!$result) {
                echo "Query failed";
                exit();
            }
            $immagine = $result->fetch_assoc()['immagine'];
            echo "<script>document.getElementById('image-utente').src='../Profilo/img_utenti/".$immagine."' </script>";
            if ($immagine==NULL) echo "<script>document.getElementById('image-utente').src='../Profilo/img_utenti/44948.png' </script>";

            $result = $mysqli -> query("SELECT bio FROM Utenti where email = '$email'");
            if (!$result) {
                echo "Query failed";
                exit();
            }
            $bio = $result->fetch_assoc()['bio'];
            echo "<script>document.getElementById('bio').value='".$bio."' </script>";

        ?> 
        
    </body>
</html>