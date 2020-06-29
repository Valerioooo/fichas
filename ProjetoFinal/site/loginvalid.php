<?php
session_start();

$ligacao = mysqli_connect('localhost',$_POST['user'], $_POST['password'],"Empresa");


if($ligacao){
	$ses['ligado'] = 1 ;
	$ses['con'] = $ligacao;
	$ses['user'] = $_POST['user'];
	$ses['passwd'] = $_POST['password'];
	$_SESSION = $ses;
	header("location: /fichas/ProjetoFinal/site/index.php");


} else{
	$ses['ligado'] = 0 ;
	$ses['erro'] = 1;
	$_SESSION = $ses;
	header("location: /fichas/ProjetoFinal/site/login.php");
}


 ?>
