<?php
require_once '../inc/init.php'; 

$page = 'homepage';
if(isset($_GET['page'])) {
  $page = $_GET['page'];
}
?>
<?php //include ROOT_PATH . 'public/template-parts/header.php'; ?>
<?php include '../public/template-parts/header.php'; ?>

 
      <div class="main">
        
        <?php include "pages/$page.php"; ?>
      </div>
    


<?php include '../public/template-parts/footer.php'; ?>
<?php// include ROOT_PATH . 'public/template-parts/footer.php'; ?>