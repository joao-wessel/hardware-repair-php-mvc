<?php
session_start();

require "src/connection.php";
require "src/core/core.php";
require "src/helpers/autoload.php";

if (isset($_SESSION["user"]) and !empty($_SESSION["user"] and $_SESSION["user"] == "logged")) {
  $authenticated = true;
} else {
  $authenticated = false;
}

$core = new Core;
$core->start($authenticated);