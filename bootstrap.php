<?php

//Require all the needed files to configure stuff
require('config.php');
require('vendor/autoload.php');

$router = new phpTech\core\router\Router();
$view = new phpTech\core\view\View(
  new phpTech\core\view\ViewLoader(BASEPATH.'//views//')
);
