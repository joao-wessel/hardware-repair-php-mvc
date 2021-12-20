<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Área de Funcionários</title>
</head>

<body>
  <div class="m-auto mt-3" style="width: 1800px;">
    <a href="http://localhost/hardware-repair/employee/add"><button type="button" class="btn btn-secondary btn-dark">Cadastrar Funcionário</button></a>
    <div class="d-flex m-auto" style="width: 1800px;">
      <table class="table table-bordered table-hover" style="margin-top: 10px;">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($employeeList as $employee) : ?>
            <tr>
              <td><?= $employee['id']; ?></td>
              <td><?= $employee['nome']; ?></td>
              <td><?= $employee['cpf']; ?></td>
              <td><?= $employee['data_nascimento']; ?></td>
              <td><?= $employee['telefone']; ?></td>
              <td><?= $employee['endereco']; ?></td>
              <td><?= $employee['numero'];  ?></td>
              <td><?= $employee['bairro']; ?></td>
              <td><?= $employee['cep']; ?></td>
              <td><a href="http://localhost/hardware-repair/employee/edit/<?= $employee['id']; ?>"><button type="button" class="btn btn-dark">Editar</button></a>
                <a href="http://localhost/hardware-repair/employee/delete/<?= $employee['id']; ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>