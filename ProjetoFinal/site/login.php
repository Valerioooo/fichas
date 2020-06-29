<?php
session_start();
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <form action="/fichas/ProjetoFinal/site/loginvalid.php" method="post">
    <div class="form-group">
      <label for="user">Utilizador:</label>
      <input type="text" class="form-control" id="user" placeholder="Insira o Utilizador" name="user" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Insira a Password" name="password" required>
    </div>
    <div class="form-group form-check">
    </div>
    <button type="submit" class="btn btn-outline-info">Entrar</button>
	</form>

	<?php
	if ($_SESSION['erro'] == 1) {
		echo '<p>O user ou a Password estão incorretos</p>';
	}
	?>
</div>

</body>
</html>
