<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  global $loggedInUser;
  session_start();
  

  if (isset($_SESSION['Utenti'])) {
    $loggedInUser = unserialize($_SESSION['Utenti']);
  }
