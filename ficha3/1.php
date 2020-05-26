<html>
<head>
<title>Formulário em HTML </title>
</head>
<body>
<h1>Bem-vindo à disciplina de Prática Simulada</h1>
<h2>Preencha o formulário abaixo para poder participar no sorteio</h2><br />
<!-- action determina o ficheiro para onde irão ser enviados os dados e que irá tratar
esses mesmos dados. O método determina como irão ser enviados esses mesmos
dados, se de uma forma confidencial, ou não. -->
<form action="teste.php" method="post">
<!-- DADOS PESSOAIS-->
<fieldset>
<legend>Dados Pessoais</legend>
<table cellspacing="10">
<tr>
<td>
<label for="nome">Nome: </label>
</td>
<td align="left">
<input type="text" name="email">
</td>
<td>
<label for="apelido">Apelido: </label>
</td>
<td align="left">
<input type="text" name="apelido">
</td>
</tr>
<tr>
<td>
<label>Data de Nascimento: </label>
</td>
<td align="left">
<input type="text" name="dia" size="2" maxlength="2" value="dd">
<input type="text" name="mes" size="2" maxlength="2" value="mm">
<input type="text" name="ano" size="4" maxlength="4" value="aaaa">
</td>
<td>
<label for="naturalidade">Naturalidade: </label>
</td>
<td align="left">
<input type="text" name="naturalidade" size="13" maxlength="13">
</td>
</tr>
<tr>
<td>
<label>Sexo: </label>
</td>
<td align="left">
<input type="radio" name="gender" value="masculino" checked>Masculino
<input type="radio" name="gender" value="feminino">Feminino
<input type="radio" name="gender" value="outro"> Outro
</td>
</tr>
</table>
</fieldset>
<br />
<!-- ENDEREÇO -->
<fieldset>
<legend>Dados de Endereço</legend>
<table cellspacing="10">
<tr>
<td>
<label for="morada">Morada:</label>
</td>
<td align="left">
<input type="text" name="rua">
</td>
<td>
<label for="numero">Numero:</label>
</td>
<td align="left">
<input type="text" name="numero" size="4">
</td>
</tr>
<tr>
<td>
<label for="cidade">Cidade:</label>
</td>
<td align="left">
<select name="cidade">
<option value="lx">Lisboa</option>
<option value="pt">Porto</option>
<option value="cb">Coimbra</option>
<option value="fr">Faro</option>
</select>
</td>
</tr>
<tr>
<td>
<label for="cp">Código Postal: </label>
</td>
<td align="left">
<input type="text" name="cp" size="5" maxlength="4"> - <input type="text"
name="cp2" size="4" maxlength="3">
</td>
</tr>
</table>
</fieldset>
<br />
<!-- DADOS DE LOGIN -->
<fieldset>
<legend>Dados de login</legend>
<table cellspacing="10">
<tr>
<td>
<label for="email">E-mail: </label>
</td>
<td align="left">
<input type="text" name="email">
</td>
</tr>
<tr>
<td>
<label for="login">Login: </label>
</td>
<td align="left">
<input type="text" name="login">
</td>
</tr>
<tr>
<td>
<label for="pass">Password: </label>
</td>
<td align="left">
<input type="password" name="pass">
</td>
</tr>
<tr>
<td>
<label for="passconfirm">Confirme a password: </label>
</td>
<td align="left">
<input type="password" name="passconfirm">
</td>
</tr>
</table>
</fieldset>
<br />
<input type="submit">
<input type="reset" value="Limpar">
</form>
</body>
</html>
