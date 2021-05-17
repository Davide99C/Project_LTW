<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  $cm = new CartManager();
  $cartId = $cm->getCurrentCartId();

  if (isset($_POST['minus'])) {
    $cart_id = esc($_POST['cart_id']);
    $product_id = esc($_POST['product_id']);
    $cm->removeFromCart($product_id, $cart_id);
  }

  if (isset($_POST['plus'])) {
    $cart_id = esc($_POST['cart_id']);
    $product_id = esc($_POST['product_id']);
    $cm->addToCart($product_id, $cart_id);
  }

  $cart_total = $cm->getCartTotal($cartId);
  $cart_items = $cm->getCartItems($cartId);
  // var_dump($cartId);
  // var_dump($cart_items);
  // var_dump($cart_total);

  //VARIABILI GLOBALI 
  $nome = $_GET['nome'];
  $cognome = $_GET['cognome'];
  $email = $_GET['email'];
  $immagine = $_GET['immagine'];

  $_GLOBALS['URL_USER'] = "?nome=$nome&cognome=$cognome&email=$email&immagine=$immagine";
?>

<div class="cart-centro">
  <?php if (count($cart_items) > 0) : ?>
    <a href="<?php echo ROOT_URL . 'public'.$_GLOBALS['URL_USER'].'&pages=homepage'; ?>" class="back"> &#8592; Vai allo Shopping </a>
  
    <div class="titolo" >
    
      <label class="t1">Carrello</label>
    
      <label id="t2"><?php echo esc_html($cart_total[0]['num_products']); ?> prodotti nel carrello</label>
    </div>

    <table>
    
    <tr><div class="cart-product">
    <?php foreach ($cart_items as $item) : ?>
    <td>
    <div class="name">
      <?php echo esc_html($item['product_name']); ?></td>
    <td>
    
    <div class="prezzo"><strong>€ <?php echo esc_html($item['single_price']); ?></strong><br></div> 
    </td>
    <td>
    <form method="post">
      <div class="bottoni">
        <input name="minus" class="minus" type="submit" value="-">
        <input type="hidden" name="cart_id" value="<?php echo esc_html($item['cart_id']); ?>">
        <input type="hidden" name="product_id" value="<?php echo esc_html($item['product_id']); ?>">
        <span class="quantity"><?php echo esc_html($item['quantity']); ?></span>
        <input name="plus" class="plus" type="submit" value="+" >
      </div>
    </form>
    </td>
    </div>
    <td>
    <div class="prezzo"> <strong class="prezzo">€ <?php echo esc_html($item['total_price']); ?></strong></div>
    
    </td>
    </tr>
    
     <?php endforeach; ?>
    <tr><td>

    <hr class="mb-4" width="100%">
    <span class="l-total">Totale</span>
    </td>
    <td></td>
    <td></td>
    <td>
    <div class="prezzo">€ <?php echo esc_html($cart_total[0]['total']); ?></div>
    </td>
    
    </tr>
    </table>
      <br>
      <br>
      <div class ="checkout" align="center">
    <a class="checkout" href="<?php echo ROOT_URL . 'shop'.$_GLOBALS['URL_USER'].'&pages=checkout'; ?>">CHECKOUT</a>
    </div>




<?php else : ?>
<p class="lead">Nessun elemento nel carrello...</p>
<a href="<?php echo ROOT_URL . 'public'.$_GLOBALS['URL_USER'].'pages=homepage'; ?>" class="back">&#8592; Vai allo Shopping </a>
<?php endif ; ?>

 
 
 <script> 
  var x= new URLSearchParams(window.location.search);
  var username = x.get('nome');console.log(username);
        var surname = x.get('cognome');console.log(surname);
        var email = x.get('email');console.log(email);
        var immagine = x.get('immagine');
        

</script> 

</div>