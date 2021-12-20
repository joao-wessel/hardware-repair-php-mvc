<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <div class="text-center mt-5">
    <form class="login" method="post" style="max-width:480px;margin:auto;">
      <img class="mt-4 mb-4" src="https://img.icons8.com/ios-filled/100/000000/computer-support.png" alt="logo" />

      <div class="mb-3">
        <label class="visually-hidden" for="user-input">Usuário</label>
        <input type="text" name="login" class="form-control" id="user-input" placeholder="Usuário" required autofocus>
      </div>

      <div class="password">
        <label class="visually-hidden" for="password-input">Senha</label>
        <input type="password" name="senha" class="form-control" id="password-input" placeholder="Senha" required autofocus>
      </div>

      <div class="mt-3 d-grid gap-2">
        <button type="submit" class="btn btn-dark btn-block" value="">Acessar</button>
      </div>
    </form>
  </div>
</body>

</html>