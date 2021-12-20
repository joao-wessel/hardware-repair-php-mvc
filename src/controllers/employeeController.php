<?php

class employeeController extends mainController
{

  public function index()
  {
    $employeeDAO = new employeeDao();
    $result = $employeeDAO->read();
    $content['employeeList'] = $result;

    $this->loadTemplate("employeePages/employee", $content);
  }

  public function add()
  {
    $this->loadTemplate("employeePages/addEmployee", array());

    if (isset($_POST['nome'])) {
      $employee = new Employee();
      $dao = new employeeDao();
      $employee->nome = $_POST['nome'];
      $employee->cpf = $_POST['cpf'];
      $employee->data_nascimento = $_POST['data_nascimento'];
      $employee->telefone = $_POST['telefone'];
      $employee->endereco = $_POST['endereco'];
      $employee->numero = $_POST['numero'];
      $employee->bairro = $_POST['bairro'];
      $employee->cep = $_POST['cep'];
      $dao->create($employee);
      header('Location:http://localhost/hardware-repair/employee');
    }
  }

  public function edit($params)
  {
    $employeeDAO = new employeeDao();
    $result = $employeeDAO->search($params);
    $content['result'] = $result;

    $this->loadTemplate("employeePages/editEmployee", $content);

    if (isset($_POST['id'])) {
      $employee = new Employee();
      $dao = new employeeDao();
      $employee->id = $_POST['id'];
      $employee->nome = $_POST['nome'];
      $employee->cpf = $_POST['cpf'];
      $employee->data_nascimento = $_POST['data_nascimento'];
      $employee->telefone = $_POST['telefone'];
      $employee->endereco = $_POST['endereco'];
      $employee->numero = $_POST['numero'];
      $employee->bairro = $_POST['bairro'];
      $employee->cep = $_POST['cep'];
      $dao->update($employee);
      header('Location:http://localhost/hardware-repair/employee');
    }
  }

  public function delete($params)
  {
    $employeeDAO = new employeeDao();
    $employeeDAO->delete($params);

    header('Location:http://localhost/hardware-repair/employee');
  }
}