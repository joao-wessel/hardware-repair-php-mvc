<?php
require "environment.php";

if (ENVIRONMENT == "development") {
  define("BASE_URL", "localhost/hardware-repair");
  $config = array(
    "dbname" => "hardware-repair",
    "host" => "localhost",
    "user" => "root",
    "password" => ""
  );
  extract($config);
}

global $pdo;

try {
  $pdo = new PDO("mysql:dbname=hardware-repair;host=localhost", "root", "");
} catch (PDOException $ex) {
  print $ex->getMessage();
}