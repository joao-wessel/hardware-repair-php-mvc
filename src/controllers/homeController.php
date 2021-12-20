<?php

class homeController extends mainController
{

  public function index()
  {
    $content = array(
      "some" => "text"
    );

    $this->loadTemplate("home", $content);
  }

  public function open()
  {
    print "test";
  }
}