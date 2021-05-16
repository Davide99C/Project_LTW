<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  if (isset($_POST['add_to_cart'])) {

    $productId = trim($_POST['id']);

    $cm = new CartManager();
    $cartId = $cm->getCurrentCartId();
    //var_dump($cartId); die;
    $cm->addToCart($productId, $cartId);
  }
  
  $pm = new ProductManager();
  $products = $pm->getAll();
?>


  

<div class="centro"> 
   
  <div id="sx" class="lato">
      <div class="img_sx">
        <img class="img-lato" src="http://localhost/Progetto/Project_LTW/Client/img/White-logo.png" />  
      </div>
      <div class="img_sx">
          <img class="img-lato" src="http://localhost/Progetto/Project_LTW/Client/img/White-logo.png" />  
      </div>
      <div class="img_sx">
          <img class="img-lato" src="http://localhost/Progetto/Project_LTW/Client/img/White-logo.png" />  
      </div>
  </div>

  

  <div class="row" align="center">
    <div class="carrello">
      <a class="cart" href="<?php echo ROOT_URL; ?>shop?page=cart">Carrello
      <i class="fas fa-shopping-cart"></i>
      <span class="badge badge-primary badge-pill js-totCartItems"></span>
      </a>
    </div>
    <?php 
      
    if (count($products) > 0) : ?>
    <h1 align="center">SHOP</h1>
    <?php foreach($products as $product) : ?>
    <div class="product-card">
      <div class="product-name">
        <?php
        //converte da bin a jpg
        echo '<img src="data:image/jpg;base64,' .  base64_encode($product->img)  . '" width="100%"/>';
        ?>
        <br>
        <?php echo esc_html($product->name); ?>
      </div>
      
      <div class="product-decription">
        <?php echo substr(esc_html($product->description), 0, 50); ?>
        <br>
        <small class="price"><?php echo esc_html($product->price); ?> €</small>
      </div>
    
      <div class="product-actions">
        <button class="vedi" onclick="location.href='<?php echo ROOT_URL . 'shop?page=view-product&id=' . esc_html($product->id); ?>'">Vedi</button>
        <!--<a class="btn btn-outline-primary btn-sm" href="#">Aggiungi al carrello</a>-->
        <form method="post">
          
          <input type="hidden" name="id" value="<?php echo esc_html($product->id); ?>">
          <input name="add_to_cart"  type="submit" class="add_to_cart" value="Aggiungi al carrello">
        </form>
      </div>
    </div>
    
    <?php endforeach; ?>
    </div>
    
    
  <div id="dx" class="lato">
    <div class="img_dx">
        <img class="img-lato" src="http://localhost/Progetto/Project_LTW/Client/img/White-logo.png" /> 
    </div>
    <div class="img_dx">
        <img class="img-lato" src="http://localhost/Progetto/Project_LTW/Client/img/White-logo.png" /> 
    </div>
    <div class="img_dx">
        <img class="img-lato" src="http://localhost/Progetto/Project_LTW/Client/img/White-logo.png" /> 
    </div>
  </div>
</div>

<?php else : ?>

<?php endif; ?>


