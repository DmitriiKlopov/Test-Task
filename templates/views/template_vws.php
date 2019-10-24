<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Test Task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/css/main.css" rel="stylesheet">
    <script src="/js/main.js"></script>
  </head>

  <body>
 
  <div class="container">
    <div class="header">
      <ul class="nav nav-pills pull-right">
        <li <?php if($this->name == 'main'  ){ echo 'class="active"'; }; ?>><a href="/">Главная</a></li>
        <li <?php if($this->name == 'task'  ){ echo 'class="active"'; }; ?>><a href="/task">Корзина</a></li>
        <li <?php if($this->name == 'admin' ){ echo 'class="active"'; }; ?>><a href="/admin">Админ панель</a></li>
      </ul>
    </div>
    <section class="row title-bar">
      <div class="container">
        <div class="col-md-12">
          <h1>Тестовый подзадачник</h1>
        </div>
      </div>
    </section>

      <?php include 'app/views/'.$this->name.'_vws.php'; ?>

      <div class="footer">
        <p>&copy; Dmitriy Klopov</p>
      </div>

    </div>
	
  </body>
</html>