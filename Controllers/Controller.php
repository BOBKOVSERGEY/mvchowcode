<?php

class Controller extends DB
{
  public static function createView($viewName)
  {
    require_once __DIR__ . '/../Views/' . $viewName . '.php' ;
  }
}