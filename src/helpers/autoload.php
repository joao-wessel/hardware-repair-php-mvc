<?php
spl_autoload_register(function ($class) {
  if (file_exists("src/core/" . $class . ".php")) {
    require "src/core/" . $class . ".php";
  }
  if (file_exists("src/models/" . $class . ".php")) {
    require "src/models/" . $class . ".php";
  }
  if (file_exists("src/controllers/" . $class . ".php")) {
    require "src/controllers/" . $class . ".php";
  }
  if (file_exists("src/entities/" . $class . ".php")) {
    require "src/entities/" . $class . ".php";
  }
});