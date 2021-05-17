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
//?>

<?php
  global $alertMsg;
  $error = false;

  $cartMgr = new CartManager();
  $orderMgr = new OrderManager();

  $cartId = $cartMgr->getCurrentCartId();

  //if ($cartMgr->isEmptyCart($cartId)){
  //  $alertMsg = 'cart_empty';
  //  $error = true;
  //}
  
  //$address = $orderMgr->getUserAddress($loggedInUser->id);
  //if(!$error && !$address) {
    
  //  $alertMsg = 'address_not_found';
  //  $error = true;
  //}

  if(!$error){
    
    /*$orderId = $orderMgr->createOrderFromCart($cartId, $loggedInUser->id);

    $orderItems = $orderMgr->getOrderItems($orderId);
    $orderTotal = $orderMgr->getOrderTotal($orderId)[0];

    $br = "\r\n";
    $to = $loggedInUser->email;
    $subject = "ORDINE N. " . $orderId;
    $txt = "<h2>Grazie per l'acquisto</h2>" . $br ;

    $headers = "From: ".SITE_NAME . $br ;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $style = "style='border: 1px solid black; border-collapse: collapse;'";

    $br = "<br>";
    $txt.= $br . "<h3>Riepilogo Ordine:</h3>";

    $mailBody = "<table $style><tr><th $style>Prodotto</th><th $style >Prezzo Unitario</th><th $style >N. Pezzi</th><th $style >Importo</th></tr>";
    foreach($orderItems as $item){
      $mailBody .= "<tr><td $style>".$item['product_name']."</td><td $style>".$item['single_price']."</td><td $style>".$item['quantity']."</td><td $style>".$item['total_price']."</td></tr>";
    }
    $mailBody .= "<tr><td $style colspan='4'>Totale €". $orderTotal['total'] . "</td></tr></table>";
 
    $txt .= $mailBody . $br ;
    $txt.= $br . "<h3>Indirizzo di spedizione:</h3>";

    //$shippingAddressStr = "<strong>Indirizzo: </strong>" . $address['street'] . $br;
    //$shippingAddressStr .= "<strong>Città: </strong>" . $address['city'] . $br;
    //$shippingAddressStr .= "<strong>CAP: </strong>" . $address['cap'] . $br;

    $txt .= $shippingAddressStr . $br;
    $txt .= $br . "Riceverà una mail quando l'ordine sarà spedito.";

    $style="";
    $htmlBody = "<table class='table table-bordered' $style><tr><th $style>Prodotto</th><th $style >Prezzo Unitario</th><th $style >N. Pezzi</th><th $style >Importo</th></tr>";
    foreach($orderItems as $item){
      $htmlBody .= "<tr><td $style>".$item['product_name']."</td><td $style>€ ".$item['single_price']."</td><td $style>".$item['quantity']."</td><td $style>€ ".$item['total_price']."</td></tr>";
    }
    $htmlBody .= "<tr><td $style colspan='4'>Totale €". $orderTotal['total'] . "</td></tr></table>";

    mail($to,$subject,$txt,$headers);
  } else {
    echo "<script>location.href='".ROOT_URL."shop?page=cart';</script>";
    exit;
  }*/
}
?>

  <head>
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>shop/pages/checkout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
  <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Indirizzo di fatturazione</h3>
            <label for="fname"><i class="fa fa-user"></i> Nome e Cognome</label>
            <input type="text" id="fname" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Indirizzo</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> Citta'</label>
            <input type="text" id="city" name="city" >

            <div class="row">
              <div class="col-50">
                <label for="state">Nazione</label>
                <input type="text" id="state" name="state" >
              </div>
              <div class="col-50">
                <label for="zip">CAP</label>
                <input type="text" id="cap" name="cap" >
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
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Numero della carta</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Mese di Scadenza</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Settembre">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Anno di scadenza</label>
                <input type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> L'indirizzo di spedizione e' lo stesso di fatturazione
        </label>
        <input type="submit" value="Acquista" class="acquista">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
    
      <h4>Carrello <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo esc_html($cart_total[0]['num_products']); ?></b></span></h4>
      <?php foreach ($cart_items as $item) : ?>
        <p id="price"><label ><?php echo esc_html($item['product_name']); ?> <span class="price">€<?php echo esc_html($item['total_price']); ?></label></span></p>
      <?php endforeach; ?>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo esc_html($cart_total[0]['total']); ?></b></span></p>
    </div>
  </div>
</div>

