<?php
session_start();

unset($_SESSION['ligado']);
unset($_SESSION['user']);
unset($_SESSION['erro']);


header("location: /fichas/ProjetoFinal/site/index.php")

 ?>
