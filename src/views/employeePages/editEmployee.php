<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar Funcionário</title>
</head>

<body>
  <div class="container mt-3">
    <form class="row g-3" method="post">
      <div class="col-md-4">
        <label for="input-name" class="form-label">Nome</label>
        <input type="text" name="nome" value="<?= $result['nome'] ?>" class="form-control" id="input-name" required>
      </div>

      <div class="col-md-4">
        <label for="input-cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" value="<?= $result['cpf'] ?>" class="form-control" id="input-cpf" required>
      </div>

      <div class="col-4">
        <label for="input-nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nascimento" value="<?= $result['data_nascimento'] ?>" class="form-control" id="input-nascimento" required>
      </div>

      <div class="col-md-6">
        <label for="input-telefone" class="form-label">Telefone</label>
        <input type="text" name="telefone" value="<?= $result['telefone'] ?>" class="form-control" id="input-telefone" required>
      </div>

      <div class="col-6">
        <label for="input-endereco" class="form-label">Endereço</label>
        <input type="text" name="endereco" value="<?= $result['endereco'] ?>" class="form-control" id="input-endereco" required>
      </div>

      <div class="col-md-6">
        <label for="input-numero" class="form-label">Número</label>
        <input type="text" name="numero" value="<?= $result['numero'] ?>" class="form-control" id="input-numero" required>
      </div>

      <div class="col-md-6">
        <label for="input-bairro" class="form-label">Bairro</label>
        <input type="text" name="bairro" value="<?= $result['bairro'] ?>" class="form-control" id="input-bairro" required>
      </div>

      <div class="col-md-4">
        <label for="input-cep" class="form-label">CEP</label>
        <input type="text" name="cep" value="<?= $result['cep'] ?>" class="form-control" id="input-cep" required>
      </div>

      <div class="col-12">
        <button type="submit" value="Submit" class="btn btn-dark">Alterar</button>
      </div>

      <input type="hidden" value="<?= $result['id'] ?>" name="id">
    </form>
</body>

</html>