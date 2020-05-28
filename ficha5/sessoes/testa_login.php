<?php
session_start();

if($_POST['user'] == 'aula_rc' and $_POST['password'] == 'php') {
    $ses['ligado'] = 1 ;
}else{
$ses['ligado'] = 0 ;
}
$_SESSION = $ses;
header('location: principal.php');

 ?>
