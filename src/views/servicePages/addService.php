<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Serviço</title>
</head>

<body>
  <div class="container mt-3">
    <form class="row g-3" action="http://localhost/hardware-repair/service/add" method="post">
      <div class="col-md-4">
        <label for="input-numero" class="form-label">Número</label>
        <input type="number" name="numero" class="form-control" id="input-numero" required>
      </div>

      <div class="col-md-4">
        <label for="input-data" class="form-label">Data de Solicitação</label>
        <input type="date" name="data" class="form-control" id="input-data" required>
      </div>

      <div class="col-4">
        <label for="input-valor" class="form-label">Valor</label>
        <input type="number" name="valor" class="form-control" id="input-valor" required>
      </div>

      <div class="col-6">
        <label for="input-produto" class="form-label">Produto</label>
        <input type="text" name="produto" class="form-control" id="input-produto" required>
      </div>

      <div class="col-md-6">
        <label for="input-descricao" class="form-label">Descrição</label>
        <input type="text" name="descricao" class="form-control" id="input-descricao" required>
      </div>

      <div class="col-10">
        <label for="input-sexo" class="form-label">Pagamento</label>
        <div class="form-radio">
          <input class="form-radio-input" name="pagamento" value="Dinheiro" type="radio" id="input-dinheiro" required>
          <label class="form-radio-label" for="input-dinheiro">
            Dinheiro
          </label>
        </div>
        <div class="form-radio">
          <input class="form-radio-input" name="pagamento" value="Cartão" type="radio" id="input-cartao" required>
          <label class="form-radio-label" for="input-cartao">
            Cartão
          </label>
        </div>
      </div>

      <div class="col-12">
        <button type="submit" value="Submit" class="btn btn-dark">Cadastrar</button>
      </div>
    </form>
  </div>
</body>

</html>