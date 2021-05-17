<?php
require_once '../inc/init.php'; 
$page = isset($_GET["page"]) ? $_GET["page"] : 'checkout';
?>
<?php //include ROOT_PATH . 'public/template-parts/header.php'; ?>
<?php include '../public/template-parts/header.php'; ?>

 
      <div class="main">
        
        <?php include "pages/$page.php"; ?>
      </div>
    


<?php include '../public/template-parts/footer.php'; ?>
