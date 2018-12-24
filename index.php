<?php

spl_autoload_register(function($className) {
  if (file_exists(__DIR__ . '/Controllers/' . $className . '.php')) {
    require __DIR__ . '/Controllers/' . $className . '.php';
  } else if (__DIR__ . '/classes/' . $className . '.php') {
    require __DIR__ . '/classes/' . $className . '.php';
  }

});

require_once __DIR__ . '/Routes.php';