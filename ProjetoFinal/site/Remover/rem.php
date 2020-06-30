<?php
session_start();

$id = $_REQUEST['id'];
$tabela = $_REQUEST['tabela'];


switch ($tabela) {
	case 'Artigos': $cod='CodArtigo';break;

	case 'Clientes': $cod='CodCliente';break;

	case 'Compras': $cod='CodArtigo';break;

	case 'DetalhesVendas': $cod='NFactura';break;

	case 'ForneceArtigos': $cod='CodArtigo';break;

	case 'Fornecedores': $cod='CodForn';break;

	case 'Vendas':$cod='NFactura';break;

	default: echo "não funcionou";

}

$ligacao = mysqli_connect('localhost',$_SESSION['user'], $_SESSION['passwd'], "Empresa");



$query = "DELETE FROM ".$tabela." WHERE ".$cod." = ".$id;

echo $query;

mysqli_query($ligacao, $query);

mysqli_close($ligacao);

header("location: /fichas/ProjetoFinal/site/Listar/Lis".$tabela.".php");
 ?>
