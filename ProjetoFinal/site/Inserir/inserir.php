<?php
session_start();
$tabela = $_GET['tabela'];

switch ($tabela) {
	case 'Artigos': $cod='CodArtigo';
	$query = 'INSERT INTO Artigos (Designacao, Modelo, Preco) VALUES ( Artigos_Designacao, BP, 2.50)'
	break;
$_POST['Artigos_Designacao']
	case 'Clientes': $cod='CodCliente';	break;


	case 'Compras': $cod='CodForn';$cod2='CodArtigo';	break;


	case 'DetalhesVendas': $cod='NFactura';break;


	case 'ForneceArtigos': $cod='CodForn';$cod2='CodArtigo';break;


	case 'Fornecedores': $cod='CodForn';break;


	case 'Vendas':$cod='NFactura';break;

	default: echo "não funcionou";

}

?>
