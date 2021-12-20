<?php

class clientController extends mainController
{

  public function index()
  {
    $clientDAO = new clientDao();
    $resultClient = $clientDAO->read();
    $content['clientList'] = $resultClient;

    $this->loadTemplate("clientPages/client", $content);
  }

  public function add()
  {
    $this->loadTemplate("clientPages/addClient", array());

    if (isset($_POST['nome'])) {
      $client = new Client();
      $dao = new clientDao();
      $client->nome = $_POST['nome'];
      $client->cpf = $_POST['cpf'];
      $client->data_nascimento = $_POST['data_nascimento'];
      $client->telefone = $_POST['telefone'];
      $client->endereco = $_POST['endereco'];
      $client->numero = $_POST['numero'];
      $client->bairro = $_POST['bairro'];
      $client->cep = $_POST['cep'];
      $dao->create($client);
      header('Location:http://localhost/hardware-repair/client');
    }
  }

  public function edit($params)
  {
    $clientDAO = new clientDao();
    $resultClient = $clientDAO->search($params);
    $content['resultClient'] = $resultClient;

    $this->loadTemplate("clientPages/editClient", $content);

    if (isset($_POST['id'])) {
      $client = new Client();
      $dao = new clientDao();
      $client->id = $_POST['id'];
      $client->nome = $_POST['nome'];
      $client->cpf = $_POST['cpf'];
      $client->data_nascimento = $_POST['data_nascimento'];
      $client->telefone = $_POST['telefone'];
      $client->endereco = $_POST['endereco'];
      $client->numero = $_POST['numero'];
      $client->bairro = $_POST['bairro'];
      $client->cep = $_POST['cep'];
      $dao->update($client);
      header('Location:http://localhost/hardware-repair/client');
    }
  }

  public function delete($params)
  {
    $clientDAO = new clientDao();
    $clientDAO->delete($params);

    header('Location:http://localhost/hardware-repair/client');
  }
}