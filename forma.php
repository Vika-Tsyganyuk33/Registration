<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</head>
<body>
<form class="row g-3 needs-validation" action="./reg.php" method = "POST" novalidate> <!--добавила  action="./reg.php" method = "POST" -->
  <div  class="col-md-4">
    <label for="validationCustom01" class="form-label">Имя</label>
    <input name="name" type="text" class="form-control" id="validationCustom01" value="" required> <!-- добавила name для каждого input-->
    <div class="valid-feedback">
      Все хорошо!
    </div>
  </div>
  <div  class="col-md-4">
    <label for="validationCustom02" class="form-label">Фамилия</label>
    <input name="surname" type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Все хорошо!
    </div>
  </div>
  <div  class="col-md-6">
    <label for="validationCustom03" class="form-label">Логин</label>
    <input name="login" type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Укажите логин.
    </div>
  </div>
  <div  class="col-md-4">
    <label  for="validationCustomUsername" class="form-label">Почта</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">email</span>
      <input name="email" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Пожалуйста, выберите имя пользователя.
      </div>
    </div>
  </div>
  <div  class="col-md-3">
    <label for="validationCustom05" class="form-label">Пароль</label>
    <input name="pass" type="password" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Пожалуйста, введите пароль.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Примите условия и соглашения
      </label>
      <div class="invalid-feedback">
        Вы должны принять перед отправкой.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Отправить форму</button>
  </div>
</form>
</body>
</html>