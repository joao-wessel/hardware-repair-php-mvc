<?php

class clientDao
{

  public function read()
  {
    global $pdo;
    $sql = $pdo->query("select * from clients");
    $clientList = array();
    if ($sql->rowCount() > 0) {
      $clientList = $sql->fetchAll();
    }
    return $clientList;
  }

  public function create(Client $client)
  {
    global $pdo;
    $sql = $pdo->prepare("insert into clients (nome, cpf, data_nascimento, telefone, endereco, numero, bairro, cep) values (:nome, :cpf, :data_nascimento, :telefone, :endereco, :numero, :bairro, :cep)");
    $sql->bindValue(':nome', $client->nome);
    $sql->bindValue(':cpf', $client->cpf);
    $sql->bindValue(':data_nascimento', $client->data_nascimento);
    $sql->bindValue(':telefone', $client->telefone);
    $sql->bindValue(':endereco', $client->endereco);
    $sql->bindValue(':numero', $client->numero);
    $sql->bindValue(':bairro', $client->bairro);
    $sql->bindValue(':cep', $client->cep);
    $sql->execute();
  }

  public function delete($id)
  {
    global $pdo;
    $sql = $pdo->prepare("delete from clients where id=:id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }

  public function update($client)
  {
    global $pdo;
    $sql = $pdo->prepare("update clients set nome = :nome, cpf = :cpf, data_nascimento = :data_nascimento, telefone = :telefone, endereco = :endereco, numero = :numero, bairro = :bairro, cep = :cep where id=:id");
    $sql->bindValue(':id', $client->id);
    $sql->bindValue(':nome', $client->nome);
    $sql->bindValue(':cpf', $client->cpf);
    $sql->bindValue(':data_nascimento', $client->data_nascimento);
    $sql->bindValue(':telefone', $client->telefone);
    $sql->bindValue(':endereco', $client->endereco);
    $sql->bindValue(':numero', $client->numero);
    $sql->bindValue(':bairro', $client->bairro);
    $sql->bindValue(':cep', $client->cep);
    $sql->execute();
  }

  public function search($id)
  {
    global $pdo;
    $sql = $pdo->prepare("select * from clients where id=:id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $client = $sql->fetch(PDO::FETCH_ASSOC);
      return $client;
    } else {
      return false;
    }
  }
}