<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <title></title>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width minimum-scale=0.1">
  	<link rel="stylesheet" type="text/css" href="style/style.css">
  	<link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap-grid.css">
  	<link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap-reboot.css">
  	<link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="container" >
      <h1>Форма Регистрация</h1>
      <form id="mailForm" class="" action="registration.php" method="get">
        <input type="email" id ="email" name="email" placeholder="Email" class="form-control" value=""><br>
        <input type="text" id="name" name="name" placeholder="Введите имя" class="form-control" value=""><br>
        <input type="phone" id="phone" name="phone" placeholder="Телефон" class="form-control" value=""><br>
        <input type="password" id="password" name="password" placeholder="Введите пароль" class="form-control" value=""><br>
        <input type="password" id="password" name="password" placeholder="Введите пароль повторно" class="form-control" value=""><br>

        <button formaction="registration.php" > Регистрация </button>
      </form>
      <div id="errorMess"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js\formMail.js"></script>
  </body>
</html>
