<?php
$ligacao = mysqli_connect('localhost',$_POST['nome'], $_POST['passe']);

mysqli_select_db($ligacao, 'Empresa');

if($ligacao){
header("location: menu.html");

}else {
	echo "erro: utilizador ou password incorretos";
}


 ?>
