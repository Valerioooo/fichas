<form name="form" action="" method="post">
  nome:
  <input type="text" name="nome">
  <input type="submit" value="Iniciar Sessão" name="sendform">
</form>

<?php

if (isset($_POST["sendform"]))
{

$ses['id'] = session_id();
$ses['on'] = time();
$ses['end'] = time()+30;
$ses['ip'] = $_SERVER['REMOTE_ADDR'];
$ses['nome'] = $_POST['nome'];


$_SESSION['user'] = $ses;

header('Location: ' .$_SERVER['PHP_SELF']);

}

  ?>
