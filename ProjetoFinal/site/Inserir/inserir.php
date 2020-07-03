<?php
session_start();
$tabela = $_GET['tabela'];

switch ($tabela) {
	case 'Artigos':
	$query = "INSERT INTO $tabela (Designacao, Modelo, Preco) VALUES ( '".$_POST['Artigos_Designacao']."', '".$_POST['Artigos_Modelo']."', ".$_POST['Artigos_Preco'].")";
	echo $query;
	break;
	case 'Clientes':
	$query = "INSERT INTO $tabela (Nome, Morada, Telefone) VALUES ( '".$_POST['Clientes_Nome']."', '".$_POST['Clientes_Morada']."', '".$_POST['Clientes_Telefone']."')";
	echo $query;
	break;


	case 'Compras':
	$query = "INSERT INTO $tabela (CodForn, CodArtigo, Data, Preco, Quantidade) VALUES ( '".$_POST['Clientes_Nome']."', '".$_POST['Clientes_Morada']."', '".$_POST['Clientes_Telefone']."')";
	echo $query;

	break;


	case 'DetalhesVendas': $cod='NFactura';break;


	case 'ForneceArtigos': $cod='CodForn';$cod2='CodArtigo';break;


	case 'Fornecedores': $cod='CodForn';break;


	case 'Vendas':$cod='NFactura';break;

	default: echo "não funcionou";

}
$ligacao = mysqli_connect('localhost',$_SESSION['user'], $_SESSION['passwd'], "Empresa");

$fk = "SET GLOBAL FOREIGN_KEY_CHECKS=0";
mysqli_query($ligacao, $fk);
mysqli_query($ligacao, $query);
mysqli_close($ligacao);
header("location: /fichas/ProjetoFinal/site/Listar/Lis".$tabela.".php");

?>
