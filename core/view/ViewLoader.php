<?php

namespace phpTech\core\view;

  class ViewLoader
  {
    public function __construct($path)
    {
      $this->path=$path;
    }

    public function load($viewName)
    {
          if(file_exists($this->path.$viewName) ){
            return file_get_contents($this->path.$viewName);
          }
          throw new Exception("The view doesn't exist: ",$this->path.$viewName );

    }

  }
