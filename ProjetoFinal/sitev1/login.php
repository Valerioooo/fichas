<?php
session_start();


$ligacao = mysqli_connect('localhost',$_POST['nome'], $_POST['passe']);

mysqli_select_db($ligacao, 'Empresa');

if($ligacao){
	$_SESSION['ligado'] = 1 ;
	header("location: menu.html");

}else {
	$_SESSION['ligado'] = 0 ;
	echo "erro: utilizador ou password incorretos";
}


 ?>
