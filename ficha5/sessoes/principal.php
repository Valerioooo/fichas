<?php
session_start();
if ($_SESSION['ligado'] == 1) {
  echo "Bem Vindo";
}
else{
header('location: testa_login.html');
}

?>
