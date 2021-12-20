<?php

class loginController extends mainController
{

  public function index()
  {
    if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
      $userDAO = new userDao();
      $login = addslashes($_POST['login']);
      $senha = addslashes($_POST['senha']);
      $user = $userDAO->log_into($login, $senha);

      if ($user == true) {
        $_SESSION["user"] = "logged";
        header("Location:http://localhost/hardware-repair/");
      } else {
        header("Location:http://localhost/hardware-repair/login");
      }
    } else {
      $content = array();
      $this->loadView("login", $content);
    }
  }
}