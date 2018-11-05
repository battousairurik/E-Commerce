<!--
Project Title: E-Commerce
Version: 1.3
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/4/2018
Description: Main database connection string
-->

<!--Database declaration and connection-->
<?php

  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "");
  define("DB_NAME", "mydatabase");

  $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>
