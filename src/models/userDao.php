<?php

class userDao
{

  public function log_into($login, $senha)
  {
    global $pdo;
    $sql = $pdo->prepare("select * from users where login = :login and senha = :senha");
    $sql->bindValue(':login', $login);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $user = true;
    } else {
      $user = false;
    }
    return $user;
  }
}