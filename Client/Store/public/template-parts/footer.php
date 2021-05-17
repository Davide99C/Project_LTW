<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  $cartMgr = new CartManager();
  $cartId = $cartMgr->getCurrentCartId();
  $totCartItems = $cartMgr->getCartTotal($cartId)[0]['num_products'];
  $totCartItems = !$totCartItems ? 0 : $totCartItems;
  
  //VARIABILI GLOBALI
  /*$nome = $_GET['nome'];
  $cognome = $_GET['cognome'];
  $email = $_GET['email'];
  $immagine = $_GET['immagine'];

  $_GLOBALS['URL_USER'] = "?nome=$nome&cognome=$cognome&email=$email&immagine=$immagine";
  */
?>
  <footer id="footer">
            <ul id="imagefooter">
                <img src="../../img/logo.png" style="width:150px;height:150px;">
            </ul>
            
            <ul id="menufooter">
                <a href="../../ChiSiamo/chisiamo.html<?php echo $_GLOBALS['URL_USER']?>" role='button' class='btn'> CHI SIAMO </a><br>
                <a href='../../Privacy/privacy.html<?php echo $_GLOBALS['URL_USER']?>' role='button' class='btn' > PRIVACY POLICY </a><br>
                <a href='../../Faq/faq.html<?php echo $_GLOBALS['URL_USER']?>' role='button' class='btn'> FAQ </a><br> 
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

  <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
  <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>assets/js/main.js"></script>
  <script>
  $(document).ready(function(){
    var totCartItems = '<?php echo $totCartItems; ?>';
    $('.js-totCartItems').html(totCartItems);
  });
  </script>
   <!-- CONTROLLO LOGIN UTENTE -->
   <script>
            var x = new URLSearchParams(window.location.search);
            var username = x.get('nome');console.log(username);
            var surname = x.get('cognome');console.log(surname);
            var email = x.get('email');console.log(email);
            var immagine = x.get('immagine');console.log(immagine);
            if (username && surname) {
                document.getElementById("menu-2").innerHTML = "<a href='../../Profilo/profilo.php?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' id='accesso' class='btn' ><img class='img-accedi' src='../../img/44948.png' style='height:20px; width:20px;'>"+username+' '+surname+"</a>";
                document.getElementById("menu-center").innerHTML = "<a href='../../index.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='img'> <img src='../../img/logo.png'> </a>";
                document.getElementById("comparsa").innerHTML = "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a><a href='../../Store/?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> NEGOZIO  </a><br><a href='../../Gofishing/gofishing.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> GO FISHING </a><br><a href='../../Galleria/galleria.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> GALLERIA </a><br><a href='../../Faq/faq.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> FAQ </a><br><a href='../../ChiSiamo/chisiamo.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> CHI SIAMO </a>";
                document.getElementById("menufooter").innerHTML = "<a href='../../ChiSiamo/chisiamo.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> CHI SIAMO </a><br><a href='../../Privacy/privacy.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn'> PRIVACY POLICY </a><br> <a href='../../Faq/faq.html?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' class='btn' > FAQ </a><br>";
            }
            else document.getElementById("menu-2").innerHTML = "<a href='../../index.html' role='button'  class='btn' > HOME </a>";
            if (immagine)   document.getElementById("menu-2").innerHTML = "<a href='../../Profilo/profilo.php?nome="+username+'&cognome='+surname+'&email='+email+'&immagine='+immagine+"' role='button' id='accesso' class='btn' ><img class='img-accedi' src='../../Profilo/img_utenti/"+immagine+"' style='height:40px; width:40px;border-radius: 50%;margin-right:10px;margin-top:-10px;'>"+username+' '+surname+"</a>";
        </script>
</body>

</html>