<?php
session_start();
error_reporting(0);

if ($_SESSION['ligado'] != 1) {
	header("location: /fichas/ProjetoFinal/site/login.php");
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Projeto Final</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav mr-auto">
		<a href="/fichas/ProjetoFinal/site/index.php"> <button type="button" class="btn btn-outline-secondary">
		Inicio
		</button></a>
    <li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
    		Fornecedores
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisFornecedores.php">Listar Fornecedores</a>
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsFornecedores.php">Inserir Fornecedores</a>
  			</div>
			</div>

    </li>
    <li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
    		ForneceArtigos
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisForneceArtigos.php">Listar Tabela</a>
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsForneceArtigos.php">Inserir</a>
  			</div>
			</div>
    </li>
    <li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
    		Artigos
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisArtigos.php">Listar Artigos</a>
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsArtigos.php">Inserir Artigos</a>
  			</div>
			</div>
    </li>
		<li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
    		Compras
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisCompras.php">Listar Compras</a>
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsCompras.php">Inserir Compras</a>
  			</div>
			</div>

    </li>
		<li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
    		Clientes
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisClientes.php">Listar Clientes</a>
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsClientes.php">Inserir Clientes</a>
  			</div>
			</div>

    </li>
		<li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
    		Vendas
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisVendas.php">Listar Vendas</a>
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsVendas.php">Inserir Vendas</a>
  			</div>
			</div>

    </li>
		<li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
    		DetalhesVendas
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisDetalhesVendas.php">Listar Tabela</a>
    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsDetalhesVendas.php">Inserir</a>
  			</div>
			</div>

    </li>
		<li class="nav-item">
			<div class="dropdown">
				<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
				Vistas
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Vistas/ViewVendas.php">Vista das Vendas</a>
					<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Vistas/ViewCompras.php">Vista das Compras</a>
					<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Vistas/ViewForneceArtigos.php">Vista de Artigos Fornecidos</a>

				</div>
			</div>

	</li>
  </ul>
	<?php
	if ($_SESSION['ligado'] == 1) {
		echo '<a href="/fichas/ProjetoFinal/site/logout.php"> <button class="btn btn-outline-danger my-2 my-sm-0"> '.$_SESSION['user'].' LogOut</button></a>';
	} else {
		echo '<a href="/fichas/ProjetoFinal/site/login.php"> <button class="btn btn-outline-info my-2 my-sm-0"> LogIn</button></a>';
	}
?>

</nav>
<br>

<div class="container-fluid">
  <h3>Inserir Compra</h3>
<?php
$tabela ='Compras';

 echo "
<form class='needs-validation justify-content-center' novalidate method='post' action='/fichas/ProjetoFinal/site/Inserir/inserir.php?tabela=".$tabela."'>
<div class='form-row'>
    <div class='col-md-1 mb-1'>
      <label for='validationCustom01'>CodForn</label>
      <input type='text' class='form-control' name='Compras_CodForn' required>
    </div>

		<div class='col-md-1 mb-3'>
			<label for='validationCustom01'>CodArtigo</label>
			<input type='text' class='form-control' name='Compras_CodArtigo' required>
		</div>

		<div class='col-md-2 mb-3'>
			<label for='validationCustom01'>Data</label>
			<input type='date' class='form-control' name='Compras_data' required>
		</div>

		<div class='col-md-1 mb-3'>
			<label for='validationCustom01'>Preço</label>
			<input type='text' class='form-control' name='Compras_Preco' required>
		</div>

		<div class='col-md-1 mb-3'>
			<label for='validationCustom01'>Quantidade</label>
			<input type='text' class='form-control' name='Compras_Quantidade' required>
		</div>

</div>
  <button class='btn btn-info' type='submit'>Inserir</button>
</form>
";

?>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</div>

</body>

</html>
