<?php
session_start();
$tabela = $_GET['tabela'];

echo $_POST['Artigos_CodArtigo'];
echo $_POST['Artigos_Designacao'];
echo $_POST['Artigos_Modelo'];
echo $_POST['Artigos_Preco'];


switch ($tabela) {
	case 'Artigos': $cod='CodArtigo';
	$ligacao = mysqli_connect('localhost',$_SESSION['user'], $_SESSION['passwd'], "Empresa");

	$query = "UPDATE ".$tabela." SET CodArtigo=".$_POST['Artigos_CodArtigo'].", Designacao='".$_POST['Artigos_Designacao']."', Modelo='".$_POST['Artigos_Modelo']."', Preco=".$_POST['Artigos_Preco']."
						WHERE ".$cod." = ".$_POST['Artigos_CodArtigo']." ";

	echo $query;


	mysqli_query($ligacao, $query);
	break;

	case 'Clientes': $cod='CodCliente';break;

	case 'Compras': $cod='CodArtigo';break;

	case 'DetalhesVendas': $cod='NFactura';break;

	case 'ForneceArtigos': $cod='CodArtigo';break;

	case 'Fornecedores': $cod='CodForn';break;

	case 'Vendas':$cod='NFactura';break;

	default: echo "não funcionou";

}
header("Location: /fichas/ProjetoFinal/site/Listar/Lis".$tabela.".php")
 ?>
