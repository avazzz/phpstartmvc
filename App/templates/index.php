<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="maxcdn.bootstrap.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://css.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://css.maxcdn.com/respond/1.4.2/respond/min.js"></script>
  </head>
  <body>
    <h1>Пользователи</h1>

    <?php foreach ($users as $user) {  ?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $user->name; ?></div>
        <div class="panel-body"><?php echo $user->email; ?></div>
    </div>
<?php } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
