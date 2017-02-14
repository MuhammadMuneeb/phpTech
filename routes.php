<?php

 // $router->add('/', function() use ($view){
 //   $view->display('welcome.php');
 // });

//$router->add('/', 'IndexController#index');

$router->add('/aboutus', function() use ($view){
  $view->display('about.php');
});
