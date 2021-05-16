<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  //VARIABILI GLOBALI 
  $nome = $_GET['nome'];
  $cognome = $_GET['cognome'];
  $email = $_GET['email'];
  $immagine = $_GET['immagine'];

  $_GLOBALS['URL_USER'] = "?nome=$nome&cognome=$cognome&email=$email&immagine=$immagine";

  if (!isset($_GET['id'])) {
    Header('Location '. ROOT_URL);
    exit;
  } 

  if (isset($_POST['add_to_cart'])) {

    $productId = trim($_POST['id']);

    $cm = new CartManager();
    $cartId = $cm->getCurrentCartId();
    //var_dump($cartId); die;
    $cm->addToCart($productId, $cartId);

    $alertMsg = 'add_to_cart';
    echo "<script>location.href='".ROOT_URL."public?pages=homepage&msg=add_to_cart';</script>";
    exit;
  }

  $id = esc_html(trim($_GET['id']));

  
  $pm = new ProductManager();
  $product = $pm->get($id);
  
  if ($product->id == 0) {
    echo "<script>location.href='".ROOT_URL."public?pages=homepage&msg=not_found';</script>";
    exit;
  }
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/shop/pages/product.css">
  </head>

<body>
<div class="center">
  <a class="back" href="<?php echo ROOT_URL; ?>public?pages=homepage">&laquo; Lista Prodotti</a>

  

  <div class="prodotto">
     <div class="carrello">
      <a class="cart" href="<?php echo ROOT_URL; ?>shop?page=cart">Carrello
      <span class="badge badge-primary badge-pill js-totCartItems"></span>
      </a>
    </div>

    <?php echo '<img src="data:image/jpg;base64,' .  base64_encode($product->img)  . '" width="40%" align="left"/>';?>
    <div class="product">
    <h1 class="product-name"><?php echo esc_html($product->name); ?></h1>
    <p class="price">Prezzo: <?php echo esc_html($product->price); ?> €</p>
    <hr class="my-4">
    <p><?php echo esc_html($product->description); ?></p>
    <p class="lead p-3">
      <form method="post">
        <input name="id" type="hidden" value="<?php echo esc_html($product->id); ?>">
        <input name="add_to_cart" type="submit" class="add_to_cart" value="Aggiungi al carrello">
      </form>   
    </p>
  </div>
  </div>
</div>