<?php
session_start();
$tabela = $_GET['tabela'];
$id = $_REQUEST['id'];


$ligacao = mysqli_connect('localhost',$_SESSION['user'], $_SESSION['passwd'], "Empresa");

switch ($tabela) {
	case 'Artigos': $cod='CodArtigo';

	$query = "UPDATE ".$tabela." SET Designacao='".$_POST['Artigos_Designacao']."', Modelo='".$_POST['Artigos_Modelo']."', Preco=".$_POST['Artigos_Preco']."
						WHERE ".$cod." = ".$_POST['Artigos_CodArtigo']." ";

	break;

	case 'Clientes': $cod='CodCliente';
	$query = "UPDATE ".$tabela." SET Nome='".$_POST['Clientes_Nome']."', Morada='".$_POST['Clientes_Morada']."', Telefone='".$_POST['Clientes_Telefone']."'
						WHERE ".$cod." = ".$_POST['Clientes_CodCliente'];
	break;


	case 'Compras': $cod='CodForn';$cod2='CodArtigo';
	$id2 = $_REQUEST['id2'];
	$query = "UPDATE ".$tabela." SET CodForn='".$_POST['Compras_CodForn']."', CodArtigo='".$_POST['Compras_CodArtigo']."', data='".$_POST['Compras_data']."',Preco='".$_POST['Compras_Preco']."',Quantidade='".$_POST['Compras_Quantidade']."'
						WHERE ".$cod." = ".$id." AND ".$cod2." = ".$id2;
						echo $query;
	break;


	case 'DetalhesVendas': $cod='NFactura';
	$query = "UPDATE ".$tabela." SET CodArtigo='".$_POST['DetalhesVendas_CodArtigo']."',Quantidade='".$_POST['DetalhesVendas_Quantidade']."'
						WHERE ".$cod." = ".$_POST['DetalhesVendas_NFactura'];
	break;


	case 'ForneceArtigos': $cod='CodForn';$cod2='CodArtigo';
	$id2 = $_REQUEST['id2'];
	$query = "UPDATE ".$tabela." SET CodForn='".$_POST['ForneceArtigos_CodForn']."', CodArtigo='".$_POST['ForneceArtigos_CodArtigo']."',Preco='".$_POST['ForneceArtigos_Preco']."'
						WHERE ".$cod." = ".$id." AND ".$cod2." = ".$id2;
						echo $query;
	break;


	case 'Fornecedores': $cod='CodForn';
	$query = "UPDATE ".$tabela." SET Nome='".$_POST['Fornecedores_Nome']."',Endereco='".$_POST['Fornecedores_Endereco']."', Telefone='".$_POST['Fornecedores_Telefone']."'
						WHERE ".$cod." = ".$id;
						echo $query;
	break;


	case 'Vendas':$cod='NFactura';
	$query = "UPDATE ".$tabela." SET Data='".$_POST['Vendas_Data']."', CodCliente='".$_POST['Vendas_CodCliente']."'
						WHERE ".$cod." = ".$id;
						echo $query;
	break;

	default: echo "não funcionou";

}
$fk = "SET GLOBAL FOREIGN_KEY_CHECKS=0";
mysqli_query($ligacao, $fk);
mysqli_query($ligacao, $query);
header("Location: /fichas/ProjetoFinal/site/Listar/Lis".$tabela.".php")
 ?>
