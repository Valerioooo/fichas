<?php
session_start();


$ligacao = mysqli_connect('localhost',$_POST['nome'], $_POST['passe']);

mysqli_select_db($ligacao, 'Empresa');

if($ligacao){
	$ses['ligado'] = 1 ;
	header("location: indexlog.php");

}else {
	$ses['ligado'] = 0 ;
	echo "erro: utilizador ou password incorretos";
}


 ?>
