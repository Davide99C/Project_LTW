<?php
  //$querystring = $_SERVER['QUERY_STRING'] != '' ? '?' . $_SERVER['QUERY_STRING'] : '';
  //print_r ($_SERVER);
  //header('refresh:5; url = public'.$querystring);
  print_r ($_SERVER['REQUEST_URI']);

  $nome = $_GET['nome'];
  $cognome = $_GET['cognome'];
  $email = $_GET['email'];
  $immagine = $_GET['immagine'];

  $_GLOBALS['URL_USER'] = "?nome=$nome&cognome=$cognome&email=$email&immagine=$immagine";

  $querystring = "public/".$_GLOBALS['URL_USER']; 
  
  header('Location: '.$querystring);
  exit; 
