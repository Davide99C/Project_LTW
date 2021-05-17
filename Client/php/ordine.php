<?php
    include "connection.php";
    
    $mysqli = dbConnection();

    $username = $_POST['firstname'];
    $email = $_POST['email'];
    $indirizzo = $_POST['address'];
    $citta = $_POST['city'];
    $cap = $_POST['cap'];
    
    $prodotto = $_POST['prod'];
    
    $result = $mysqli -> query("INSERT INTO orders(username, email, indirizzo, citta, cap, prodotto) VALUES ('$username','$email','$indirizzo','$citta','$cap','$prodotto')");
    
    if (!$result) {
        echo "Query failed";
        exit();
     }

    //VARIABILI GLOBALI
  $nome = $_GET['nome'];
  $cognome = $_GET['cognome'];
  $email = $_GET['email'];
  $immagine = $_GET['immagine'];

  $_GLOBALS['URL_USER'] = "?nome=$nome&cognome=$cognome&email=$email&immagine=$immagine";
  

?>

<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo SITE_NAME; ?></title>
  <link rel="stylesheet" href="../aux.css">
  
</head>

<body>
    <header id="menu">
        <ul id="menu-1">
        <li></a> 
            <a id="hamb" href="#" onclick="openNav()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </a>
            <div id="comparsa" class="men">   
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;    </a>
                <a href="../index.html<?php echo $_GLOBALS['URL_USER']?>" role="button" class="btn"> HOME                       </a><br>
                <a href="../Gofishing/gofishing.html<?php echo $_GLOBALS['URL_USER']?>" role="button" class="btn"> GO FISHING   </a><br>
                <a href="../Galleria/galleria.html<?php echo $_GLOBALS['URL_USER']?>" role="button" class="btn"> GALLERIA       </a><br>
                <a href="../Faq/faq.html<?php echo $_GLOBALS['URL_USER']?>" role="button" class="btn" > FAQ                     </a><br>
                <a href="../ChiSiamo/chisiamo.html<?php echo $_GLOBALS['URL_USER']?>" role="button" class="btn"> CHI SIAMO      </a>   
            </div>
        </li>
        </ul>
        <ul id="menu-center">
            <a href="../index.html<?php echo $_GLOBALS['URL_USER']?>" role="button" class="img"> <img src="../img/logo.png"></a>
        </ul>  
        <ul id="menu-2">
            <a href="../Login/login.html" role="button" class="btn"><img class="img-accedi" src="../img/44948.png" style="height:20px; width:20px;">&nbspACCEDI </a> 
        </ul>
    </header>

    <script>
      function openNav() {
        document.getElementById("comparsa").style.width = "230px";
        document.getElementById("main").style.marginLeft = "230px";
        
      }

      function closeNav() {
        document.getElementById("comparsa").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        
      }
      </script>


 
      <div class="main">
      
      <h1> GRAZIE PER AVER EFFETTUATO L'ACQUISTO! </h1>
      <a href="../index.html<?php echo $_GLOBALS['URL_USER']; ?>" class="back"> Torna alla home </a>
      </div>

      <style>
          body{background-color: black;
          
          }

          .main{
            height: 70vh;
            text-align: center;
            background-color: grey;
            padding:0;
            margin-top:-20px;
            
          }
          .back{
              color:white;
              text-decoration: none;
              font-size: 1.5vw;
              font-weight: bold;
          }
          .back:hover{
              opacity: 0.7;
          }

          h1 {
              color: darkred;
              text-align: center;
             padding-top:15%;
             text-shadow: 0px 2px 2px black;
          }
        </style>
    


      <footer id="footer">
            <ul id="imagefooter">
                <img src="../img/logo.png" style="width:150px;height:150px;">
            </ul>
            
            <ul id="menufooter">
                <a href="../ChiSiamo/chisiamo.html<?php echo $_GLOBALS['URL_USER']?>" role='button' class='btn'> CHI SIAMO </a><br>
                <a href='../Privacy/privacy.html<?php echo $_GLOBALS['URL_USER']?>' role='button' class='btn' > PRIVACY POLICY </a><br>
                <a href='../Faq/faq.html<?php echo $_GLOBALS['URL_USER']?>' role='button' class='btn'> FAQ </a><br> 
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
        <script>
            var x = new URLSearchParams(window.location.search);
            var username = x.get('nome');console.log(username);
            var surname = x.get('cognome');console.log(surname);
            var email = x.get('email');console.log(email);
            var immagine = x.get('immagine');console.log(immagine);
            if (username && surname) {
                document.getElementById("menu-2").innerHTML = "<a href='../Profilo/profilo.php?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' id='accesso' class='btn' ><img class='img-accedi' src='../img/44948.png' style='height:20px; width:20px;'>"+username+' '+surname+"</a>";
                document.getElementById("menu-center").innerHTML = "<a href='../index.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='img'> <img src='../img/logo.png'> </a>";
                document.getElementById("comparsa").innerHTML = "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a><a href='../Store/?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> NEGOZIO  </a><br><a href='../Gofishing/gofishing.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> GO FISHING </a><br><a href='../Galleria/galleria.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> GALLERIA </a><br><a href='../Faq/faq.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> FAQ </a><br><a href='../ChiSiamo/chisiamo.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> CHI SIAMO </a>";
                document.getElementById("menufooter").innerHTML = "<a href='../ChiSiamo/chisiamo.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> CHI SIAMO </a><br><a href='../Privacy/privacy.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> PRIVACY POLICY </a><br> <a href='../Faq/faq.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn' > FAQ </a><br>";
            }
            else document.getElementById("menu-2").innerHTML = "<a href='../index.html' role='button'  class='btn' > HOME </a>";
            if (immagine)   document.getElementById("menu-2").innerHTML = "<a href='../Profilo/profilo.php?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' id='accesso' class='btn' ><img class='img-accedi' src='../Profilo/img_utenti/"+immagine+"' style='height:40px; width:40px;border-radius: 50%;margin-right:10px;margin-top:-10px;'>"+username+' '+surname+"</a>";
        </script>
</body>

</html>
