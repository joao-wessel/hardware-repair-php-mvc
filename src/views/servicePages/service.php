<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Área de Serviços</title>
</head>

<body>
  <div class="m-auto mt-3" style="width: 1800px;">
    <a href="http://localhost/hardware-repair/service/add"><button type="button" class="btn btn-secondary btn-dark">Cadastrar Serviço</button></a>
    <div class="d-flex m-auto" style="width: 1800px;">
      <table class="table table-bordered table-hover" style="margin-top: 10px;">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Data de Solicitação</th>
            <th>Valor</th>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Pagamento</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($serviceList as $service) : ?>
            <tr>
              <td><?= $service['id']; ?></td>
              <td><?= $service['numero']; ?></td>
              <td><?= $service['data']; ?></td>
              <td><?= $service['valor']; ?></td>
              <td><?= $service['produto']; ?></td>
              <td><?= $service['descricao']; ?></td>
              <td><?= $service['pagamento'];  ?></td>
              <td><a href="http://localhost/hardware-repair/service/edit/<?= $service['id']; ?>"><button type="button" class="btn btn-dark">Editar</button></a>
                <a href="http://localhost/hardware-repair/service/delete/<?= $service['id']; ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>