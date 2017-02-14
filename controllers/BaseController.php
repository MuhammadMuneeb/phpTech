<?php

namespace app\controllers;

class BaseController
{
    public function __construct()
    {
      $this->view = new \phpTech\core\view\View(
        new \phpTech\core\view\ViewLoader(BASEPATH.'//views//')
      );
    }
}
