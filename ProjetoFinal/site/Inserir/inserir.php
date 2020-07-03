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
	$query = "INSERT INTO $tabela (CodForn, CodArtigo, Data, Preco, Quantidade) VALUES ( ".$_POST['Compras_CodForn'].", ".$_POST['Compras_CodArtigo'].", '".$_POST['Compras_data']."', ".$_POST['Compras_Preco'].", ".$_POST['Compras_Quantidade'].")";
	echo $query;
	break;

	case 'DetalhesVendas':
	$query = "INSERT INTO $tabela (CodArtigo, Quantidade) VALUES ( ".$_POST['DetalhesVendas_CodArtigo'].",'".$_POST['DetalhesVendas_Quantidade']."')";
	echo $query;
	break;


	case 'ForneceArtigos':
	$query = "INSERT INTO $tabela (CodForn, CodArtigo, preco) VALUES ( ".$_POST['ForneceArtigos_CodForn'].", ".$_POST['ForneceArtigos_CodArtigo'].", ".$_POST['ForneceArtigos_preco'].")";
	echo $query;
	break;


	case 'Fornecedores':
	$query = "INSERT INTO $tabela (Nome, Endereco, Telefone) VALUES ( '".$_POST['Fornecedores_Nome']."', '".$_POST['Fornecedores_Endereco']."', '".$_POST['Fornecedores_Telefone']."')";
	echo $query;
	break;


	case 'Vendas':
	$query = "INSERT INTO $tabela (Data, CodCliente) VALUES ( '".$_POST['Vendas_Data']."', '".$_POST['Vendas_CodCliente']."')";
	echo $query;
	break;

	default: echo "não funcionou";

}
$ligacao = mysqli_connect('localhost',$_SESSION['user'], $_SESSION['passwd'], "Empresa");

$fk = "SET GLOBAL FOREIGN_KEY_CHECKS=0";
mysqli_query($ligacao, $fk);
mysqli_query($ligacao, $query);
mysqli_close($ligacao);
header("location: /fichas/ProjetoFinal/site/Listar/Lis".$tabela.".php");

?>
