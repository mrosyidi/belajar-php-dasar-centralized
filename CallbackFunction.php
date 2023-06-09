<?php
  function sayHello(string $name, callable $filter)
  {
    $finalName = call_user_func($filter, $name); // $filter($name)
    echo "Hello $finalName" . PHP_EOL;
  }

  sayHello("Eko", "strtoupper");
  sayHello("Eko", "strtolower");
  sayHello("Eko", function($name){ return strtoupper($name); });
  sayHello("Eko", fn($name) => strtoupper($name));
