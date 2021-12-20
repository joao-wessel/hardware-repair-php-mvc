<?php

class employeeDao
{

  public function read()
  {
    global $pdo;
    $sql = $pdo->query("select * from employees");
    $employeeList = array();
    if ($sql->rowCount() > 0) {
      $employeeList = $sql->fetchAll();
    }
    return $employeeList;
  }

  public function create(Employee $employee)
  {
    global $pdo;
    $sql = $pdo->prepare("insert into employees (nome, cpf, data_nascimento, telefone, endereco, numero, bairro, cep) values (:nome, :cpf, :data_nascimento, :telefone, :endereco, :numero, :bairro, :cep)");
    $sql->bindValue(':nome', $employee->nome);
    $sql->bindValue(':cpf', $employee->cpf);
    $sql->bindValue(':data_nascimento', $employee->data_nascimento);
    $sql->bindValue(':telefone', $employee->telefone);
    $sql->bindValue(':endereco', $employee->endereco);
    $sql->bindValue(':numero', $employee->numero);
    $sql->bindValue(':bairro', $employee->bairro);
    $sql->bindValue(':cep', $employee->cep);
    $sql->execute();
  }

  public function delete($id)
  {
    global $pdo;
    $sql = $pdo->prepare("delete from employees where id=:id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }

  public function update($employee)
  {
    global $pdo;
    $sql = $pdo->prepare("update employees set nome = :nome, cpf = :cpf, data_nascimento = :data_nascimento, telefone = :telefone, endereco = :endereco, numero = :numero, bairro = :bairro, cep = :cep where id=:id");
    $sql->bindValue(':id', $employee->id);
    $sql->bindValue(':nome', $employee->nome);
    $sql->bindValue(':cpf', $employee->cpf);
    $sql->bindValue(':data_nascimento', $employee->data_nascimento);
    $sql->bindValue(':telefone', $employee->telefone);
    $sql->bindValue(':endereco', $employee->endereco);
    $sql->bindValue(':numero', $employee->numero);
    $sql->bindValue(':bairro', $employee->bairro);
    $sql->bindValue(':cep', $employee->cep);
    $sql->execute();
  }

  public function search($id)
  {
    global $pdo;
    $sql = $pdo->prepare("select * from employees where id=:id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $employee = $sql->fetch(PDO::FETCH_ASSOC);
      return $employee;
    } else {
      return false;
    }
  }
}