<?php

  require('../bootstrap.php');
  require('../routes.php');

  $router->dispatch();

  $indexController = new app\controllers\IndexController();
  $indexController->index();
