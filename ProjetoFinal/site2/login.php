<?php
session_start();


$ligacao = mysqli_connect('localhost',$_POST['user'], $_POST['password']);

mysqli_select_db($ligacao, 'Empresa');

if($ligacao){
	$ses['ligado'] = 1 ;
	header("location: indexlog.php");

}else {
	$ses['ligado'] = 0 ;
	echo "erro: utilizador ou password incorretos";
}


 ?>
