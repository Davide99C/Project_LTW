<?php
  // Prevent from direct access
  //if (! defined('ROOT_URL')) {
  //  die;
  //}

  //if (!$loggedInUser) {
   // echo "<script>location.href='".ROOT_URL."auth?page=login&msg=login_for_checkout';</script>";
   // exit;
  //}
  

  
  $cm = new CartManager();
  $cartId = $cm->getCurrentCartId();
  $cart_items = $cm->getCartItems($cartId);
  $cart_total = $cm->getCartTotal($cartId);

  //VARIABILI GLOBALI
  $nome = $_GET['nome'];
  $cognome = $_GET['cognome'];
  $email = $_GET['email'];
  $immagine = $_GET['immagine'];

  $_GLOBALS['URL_USER'] = "?nome=$nome&cognome=$cognome&email=$email&immagine=$immagine";
  
  

//?>

<?php
  global $alertMsg;
  $error = false;

  $cartMgr = new CartManager();
  $orderMgr = new OrderManager();

  $cartId = $cartMgr->getCurrentCartId();


?>
  <head><link rel="stylesheet" href="<?php echo ROOT_URL; ?>shop/pages/checkout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
  
  <div class="row">
  <div class="col-75">
    <div class="container">
      <a href="<?php echo ROOT_URL . 'public'.$_GLOBALS['URL_USER'].'&pages=homepage'; ?>" class="back" style="font-weight:bold;">&#8592; Torna allo Shopping </a>
      <form action="../../php/ordine.php<?php echo $_GLOBALS['URL_USER']?>" method="POST" onsubmit="return validaOrdine()" style='cursor:auto;'>
      
        <div class="row">
          <div class="col-50">
            <h3>Indirizzo di fatturazione</h3>
            <label for="fname"><i class="fa fa-user"></i> Nome e Cognome</label>
            <input type="text" id="fname" name="firstname" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Indirizzo</label>
            <input type="text" id="adr" name="address" required >
            <label for="city"><i class="fa fa-institution"></i> Citta'</label>
            <input type="text" id="city" name="city" required>

            <div class="row">
              <div class="col-50">
                <label for="state">Nazione</label>
                <input type="text" id="state" name="state" required>
              </div>
              <div class="col-50">
                <label for="zip">CAP</label>
                <input type="text" id="cap" name="cap" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Pagamento</h3>
            <label for="fname">Carte accettate</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nome sulla carta</label>
            <input type="text" id="cname" name="cardname" required>
            <label for="ccnum">Numero della carta</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Mese di Scadenza</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Settembre" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Anno di scadenza</label>
                <input type="text" id="expyear" name="expyear" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Acquista" class="acquista">

        <?php $prodotti = array();
        foreach ($cart_items as $item) : 
          array_push($prodotti,$item['product_name'],$item['quantity']);
        endforeach; ?>
        <input name="prod" type="hidden" value="<?php foreach ($prodotti as $item){echo $item. " ";}?>">
      </form>
    </div>
  </div>
  <div class="col-25" >
    <div class="container" style="cursor:auto;">
    
      <h4>Carrello <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo esc_html($cart_total[0]['num_products']); ?></b></span></h4>
      
      <?php foreach ($cart_items as $item) : ?>
        <p id="price"><label><?php echo esc_html($item['product_name']); ?> <span class="price">€<?php echo esc_html($item['total_price']); ?></label></span></p>
        
      <?php endforeach; ?>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo esc_html($cart_total[0]['total']); ?></b></span></p>
    </div>
  </div>
</div>



 <!-- CONTROLLO LOGIN UTENTE -->
 <script>
  var x = new URLSearchParams(window.location.search);
  var username = x.get('nome');console.log(username);
  var surname = x.get('cognome');console.log(surname);
  var email = x.get('email');console.log(email);
  
  if (email) {
      document.getElementById('fname').value = username +' '+ surname;
      document.getElementById('email').value = email;
    }
</script>