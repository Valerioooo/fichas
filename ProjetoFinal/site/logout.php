<?php
session_start();

unset($_SESSION['ligado']);
unset($_SESSION['user']);
unset($_SESSION['erro']);
unset($_SESSION['con']);
unset($_SESSION['passwd']);

header("location: /fichas/ProjetoFinal/site/index.php");

 ?>
