<?php

  require_once 'app/keys.php';
  require_once 'app/forecast.php';

  if( isset($_POST['submit']) && !empty($_POST['location'])){
    require_once 'views/results.php';
  } else {
    require_once 'views/home.php';
  }





?>









