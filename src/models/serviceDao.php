<?php

class serviceDao
{

  public function read()
  {
    global $pdo;
    $sql = $pdo->query("select * from services");
    $serviceList = array();
    if ($sql->rowCount() > 0) {
      $serviceList = $sql->fetchAll();
    }
    return $serviceList;
  }

  public function create(Service $service)
  {
    global $pdo;
    $sql = $pdo->prepare("insert into services (numero, data, valor, produto, descricao, pagamento) values (:numero, :data, :valor, :produto, :descricao, :pagamento)");
    $sql->bindValue(':numero', $service->numero);
    $sql->bindValue(':data', $service->data);
    $sql->bindValue(':valor', $service->valor);
    $sql->bindValue(':produto', $service->produto);
    $sql->bindValue(':descricao', $service->descricao);
    $sql->bindValue(':pagamento', $service->pagamento);
    $sql->execute();
  }

  public function delete($id)
  {
    global $pdo;
    $sql = $pdo->prepare("delete from services where id=:id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }

  public function update($service)
  {
    global $pdo;
    $sql = $pdo->prepare("update services set numero = :numero, data = :data, valor = :valor, produto = :produto, descricao = :descricao, pagamento = :pagamento where id=:id");
    $sql->bindValue(':id', $service->id);
    $sql->bindValue(':numero', $service->numero);
    $sql->bindValue(':data', $service->data);
    $sql->bindValue(':valor', $service->valor);
    $sql->bindValue(':produto', $service->produto);
    $sql->bindValue(':descricao', $service->descricao);
    $sql->bindValue(':pagamento', $service->pagamento);
    $sql->execute();
  }

  public function search($id)
  {
    global $pdo;
    $sql = $pdo->prepare("select * from services where id=:id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $service = $sql->fetch(PDO::FETCH_ASSOC);
      return $service;
    } else {
      return false;
    }
  }
}