<!--Database declaration and connection-->
<?php

  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "");
  define("DB_NAME", "mydatabase");

  $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>
