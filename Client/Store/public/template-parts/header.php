<?php
// Prevent from direct access
if (! defined('ROOT_URL')) {
  die;
}

global $loggedInUser;

?>

<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo SITE_NAME; ?></title>
  <link rel="stylesheet" href="../pages/homepage.css">
  <link rel="stylesheet" href="http://localhost/Progetto/Project_LTW/Client/aux.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>public/pages/homepage.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>shop/pages/cart.css">

  
</head>

<body>
<header id="menu">
            <ul id="menu-1">
            <li></a> 
                <a id="hamb" href="#" onclick="openNav()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </a>
                <div id="comparsa" class="men">   
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;    </a>
                    <a href="../../../../index.html" role="button" class="btn"> HOME                       </a><br>
                    <a href="../../../../Gofishing/gofishing.html" role="button" class="btn"> GO FISHING   </a><br>
                    <a href="../../../../Galleria/galleria.html" role="button" class="btn"> GALLERIA       </a><br>
                    <a href="../../../../Faq/faq.html" role="button" class="btn" > FAQ                     </a><br>
                    <a href="../../../../ChiSiamo/chisiamo.html" role="button" class="btn"> CHI SIAMO      </a>   
                </div>
            </li>
            </ul>
            <ul id="menu-center">
                <a href="http://localhost/Progetto/Project_LTW/Client/index.html" role="button" class="img"> <img src="http://localhost/Progetto/Project_LTW/Client/img/logo.png"></a>
            </ul>  
            <ul id="menu-2">
                <a href="../../../../Login/login.html" role="button" class="btn"><img class="img-accedi" src="../../../../img/44948.png" style="height:20px; width:20px;">&nbspACCEDI </a> 
            </ul>
        </header>

        <script>
          function openNav() {
            document.getElementById("comparsa").style.width = "230px";
            document.getElementById("main").style.marginLeft = "230px";
            
          }

          function closeNav() {
            document.getElementById("comparsa").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            
          }
          </script>

      </div>
    </div>
