<?php

class mainController
{

  public function loadView($viewName, $viewData)
  {
    extract($viewData);
    require "src/views/" . $viewName . ".php";
  }

  public function loadTemplate($viewName, $viewData)
  {
    require "src/views/template.php";
  }

  public function loadViewTemplate($viewName, $viewData)
  {
    extract($viewData);
    require "src/views/" . $viewName . ".php";
  }
}