<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $curso = $_POST["cursos"];
    echo "nome: ".$_POST["nome"];
    echo "<br>email: ".$_POST["email"];
    echo "<br>telefone: ".$_POST["telefone"];
    echo "<br>curso: ".$curso;
    echo "<br>nivel: ".$_POST["nivel"];
    echo "<br>Observações: ".$_POST['obs'];
     ?>
  </body>
</html>
