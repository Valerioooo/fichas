<?php
$cookies['nome'] = $_GET['nome'];
$cookies['cidade'] = $_GET['cidade'];

foreach($cookies as $key => $value) {
  setcookie($key,$value, time()+3600);
}

header("location: mensagem.php");
 ?>
