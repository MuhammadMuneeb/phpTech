<?php

class Autoload{

  private $autoloadable = [];

  public function register($name, $loader = false)
  {
      if(is_callable($loader) || $loader == false){
        $this->autoloadable[$name] = $loader;
        return;
      }
      throw new exception("Call the loader: ".$name);
  }
  public function load($name)
  {
    $name = strtolower($name);
    $filepath = BASEPATH.'/core'.$name.'/'.$name.'.php';

    if(!empty($this->autoloadable[$name]) )
    {
      return $this->autoloadable[$name]($name);
    }
    if( file_exists($filepath)){
      return require($filepath);
    }
    //throw new exception($name." is not loaded for registration and stuff");
  }


}
