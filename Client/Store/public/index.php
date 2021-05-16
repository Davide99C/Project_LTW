<?php
require_once '../inc/init.php'; 
$page = isset($_GET["page"]) ? $_GET["page"] : 'homepage';
?>
<?php// include ROOT_PATH . 'public/template-parts/header.php'; ?>
<?php include 'template-parts/header.php'; ?>

      <div class="main">
            <?php include "pages/$page.php"; ?>
      </div>
    
<?php include 'template-parts/footer.php'; ?>
<?php //include ROOT_PATH . 'public/template-parts/footer.php'; ?>