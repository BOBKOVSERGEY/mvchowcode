<?php

spl_autoload_register(function($className) {
  if (file_exists(__DIR__ . '/Controllers/' . $className . '.php')) {
    require __DIR__ . '/Controllers/' . $className . '.php';
  } else if (__DIR__ . '/classes/' . $className . '.php') {
    require __DIR__ . '/classes/' . $className . '.php';
  }

});

require_once __DIR__ . '/Routes.php';

function debug($array)
{
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

function debugVarDump($array)
{
  echo '<pre>';
  var_dump($array);
  echo '</pre>';
}