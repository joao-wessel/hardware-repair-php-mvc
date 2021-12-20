<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand mb-0 h1" href="/hardware-repair">
        <img src="https://img.icons8.com/ios-filled/100/000000/computer-support.png" alt="" width="50" height="50" class="d-inline-block">
        HardwareRepair
      </a>

      <div class="collapse navbar-collapse" id="nav-collapse">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="http://localhost/hardware-repair/client" class="nav-link active">
              Clientes
            </a>
          </li>
          <li class="nav-item active">
            <a href="http://localhost/hardware-repair/employee" class="nav-link active">
              Funcionários
            </a>
          </li>
          <li class="nav-item active">
            <a href="http://localhost/hardware-repair/service" class="nav-link active">
              Serviços
            </a>
          </li>
        </ul>
      </div>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>

  <?php
  $this->loadViewTemplate($viewName, $viewData);
  ?>
</body>

</html>