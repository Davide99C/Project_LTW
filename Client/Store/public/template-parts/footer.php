<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  $cartMgr = new CartManager();
  $cartId = $cartMgr->getCurrentCartId();
  $totCartItems = $cartMgr->getCartTotal($cartId)[0]['num_products'];
  $totCartItems = !$totCartItems ? 0 : $totCartItems;
?>
  <footer id="footer">
            <ul id="image">
                <img src="http://localhost/Progetto/Project_LTW/Client/img/logo.png">
            </ul>
            
            <ul id="menufooter">
                <a href='../../../../ChiSiamo/chisiamo.html' role='button' class='btn'> CHI SIAMO </a><br>
                <a href='../../../../Privacy/privacy.html' role='button' class='btn' > PRIVACY POLICY </a><br>
                <a href='../../../../Faq/faq.html' role='button' class='btn'> FAQ </a><br> 
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
</body>

</html>