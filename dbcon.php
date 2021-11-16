<?php

//require for sdk setup from https://firebase-php.readthedocs.io/en/5.x/setup.html

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
  //setup sdk
  ->withServiceAccount('dscie-82ae6-firebase-adminsdk-hjbxh-ff17f99422.json')
  //setup database
  ->withDatabaseUri('https://dscie-82ae6-default-rtdb.firebaseio.com/');

  //initialize database
  $database = $factory->createDatabase();
  

?>