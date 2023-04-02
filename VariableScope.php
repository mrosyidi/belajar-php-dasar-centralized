<?php
  $name = "Eko"; // global scope

  function sayName()
  {
    global $name; // global keyword
    echo $name . PHP_EOL;
  }

  sayName();
