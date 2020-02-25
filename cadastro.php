<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogador HR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
   
    <link rel="stylesheet" href="css_login/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css_login/login.css">

</head>
<body>
<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
                <img src="./img/logo.jpg" alt="">
              <h5 class="card-title text-center">Logar</h5>
              <form action="./backEnd/registerBD.php" class="form-signin" method="POST">
             
                <div class="form-label-group">
                  <input name="usuario" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Usuario</label>
                </div>

                <div class="form-label-group">
                  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Usuario</label>
                </div>
  
                <div class="form-label-group">
                  <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Senha</label>
                </div>
  
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Lembrar Senha</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Cadastar</button>
                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i>Faça login pelo Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i>Faça login pelo Facebook</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>