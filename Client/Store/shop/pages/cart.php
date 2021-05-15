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
?>

<div class="cart-centro">
  <?php if (count($cart_items) > 0) : ?>
    <div class="titolo">
    <h1 align="center">
      Carrello
    </h1>
    <?php echo esc_html($cart_total[0]['num_products']); ?> prodotti nel carrello
    </div>

    <table>
    <tr><td id="int">PRODOTTO</td><td id="int">QUANTITA'</td><td id="int">PREZZO</td></tr>
    <tr><div class="cart-product">
    <?php foreach ($cart_items as $item) : ?>
    <td>
    <div class="name">
      <?php echo esc_html($item['product_name']); ?></td>
    <td>
    <form method="post">
      <div class="bottoni">
        <input name="minus" class="btn btn-primary btn-sm left" type="submit" value="-">
        <input type="hidden" name="cart_id" value="<?php echo esc_html($item['cart_id']); ?>">
        <input type="hidden" name="product_id" value="<?php echo esc_html($item['product_id']); ?>">
        <span class="quantity"><?php echo esc_html($item['quantity']); ?></span>
        <input name="plus" class="btn btn-primary btn-sm right" type="submit" value="+" >
      </div>
    </form>
    </td>
    </div>
    <td>
    
    <div class="prezzo"><strong class="prezzo">€ <?php echo esc_html($item['single_price']); ?></strong><br>
    Tot:
      <strong class="text-primary">€ <?php echo esc_html($item['total_price']); ?></strong>
    </div> 
    </td>
    </tr>
    

    
     
     <?php endforeach; ?>
    <tr><td>
    <span class="totale">Totale</span>
    </td>
    <td></td>
    <td>
    <div class="prezzo">€ <?php echo esc_html($cart_total[0]['total']); ?></div>
    </td>
    
    </tr>
    </table>
  
   
<hr class="mb-4">
<?php
global $loggedInUser;
?>
<?php if ($loggedInUser) : ?>
  <a onclick="return confirm('Confermi invio ordine?');" class="btn btn-primary btn-block" href="<?php echo ROOT_URL . 'shop?page=checkout' ?>">Invia Ordine</a>
<?php else : ?>
  <a class="Registrazione" href="<?php echo '../../Registrazione/registrazione.html' ?>">Registrati per effettuare ordine</a>
<?php endif ; ?>
<?php else : ?>
<p class="lead">Nessun elemento nel carrello...</p>
<a href="<?php echo ROOT_URL . 'public?pages=homepage'; ?>" class="btn btn-primary btn-lg mb-5 mt-3">Vai allo Shopping &raquo;</a>
<?php endif ; ?>
 </div> 