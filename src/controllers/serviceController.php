<?php

class serviceController extends mainController
{

  public function index()
  {
    $serviceDAO = new serviceDao();
    $result = $serviceDAO->read();
    $content['serviceList'] = $result;

    $this->loadTemplate("servicePages/service", $content);
  }

  public function add()
  {
    $this->loadTemplate("servicePages/addService", array());

    if (isset($_POST['numero'])) {
      $service = new Service();
      $dao = new serviceDao();
      $service->numero = $_POST['numero'];
      $service->data = $_POST['data'];
      $service->valor = $_POST['valor'];
      $service->produto = $_POST['produto'];
      $service->descricao = $_POST['descricao'];
      $service->pagamento = $_POST['pagamento'];
      $dao->create($service);
      header('Location:http://localhost/hardware-repair/service');
    }
  }

  public function edit($params)
  {
    if ($params == "action" && isset($_POST['id'])) {
      $service = new Service();
      $dao = new serviceDao();
      $service->id = $_POST['id'];
      $service->numero = $_POST['numero'];
      $service->data = $_POST['data'];
      $service->valor = $_POST['valor'];
      $service->produto = $_POST['produto'];
      $service->descricao = $_POST['descricao'];
      $service->pagamento = $_POST['pagamento'];
      $dao->update($service);
      header('Location:http://localhost/hardware-repair/service');
    } else {
      if ($params) {
        $serviceDAO = new serviceDao();
        $result = $serviceDAO->search($params);
        $content['result'] = $result;

        $this->loadTemplate("servicePages/editService", $content);
      }
    }
  }

  public function delete($params)
  {
    $serviceDAO = new serviceDao();
    $serviceDAO->delete($params);

    header('Location:http://localhost/hardware-repair/service');
  }
}