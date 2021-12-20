<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Cliente</title>
</head>

<body>
  <div class="container mt-3">
    <form class="row g-3" action="http://localhost/hardware-repair/client/add" method="post">
      <div class="col-md-4">
        <label for="input-name" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="input-name" required>
      </div>

      <div class="col-md-4">
        <label for="input-cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control" id="input-cpf" required>
      </div>

      <div class="col-4">
        <label for="input-nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form-control" id="input-nascimento" required>
      </div>

      <div class="col-6">
        <label for="input-telefone" class="form-label">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="input-telefone" required>
      </div>

      <div class="col-md-6">
        <label for="input-endereco" class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="input-endereco" required>
      </div>

      <div class="col-md-6">
        <label for="input-numero" class="form-label">Número</label>
        <input type="text" name="numero" class="form-control" id="input-numero" required>
      </div>

      <div class="col-md-6">
        <label for="input-bairro" class="form-label">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="input-bairro" required>
      </div>

      <div class="col-md-4">
        <label for="input-cep" class="form-label">CEP</label>
        <input type="text" name="cep" class="form-control" id="input-cep" required>
      </div>

      <div class="col-12">
        <button type="submit" value="Submit" class="btn btn-dark">Cadastrar</button>
      </div>
    </form>
  </div>
</body>

</html>