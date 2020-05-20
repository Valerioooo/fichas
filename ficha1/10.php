<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$a = 17;
$b = 2;
$c = 11;
$med = ($a+$b+$c)/3;
if ($med >= 0 and $med <= 20) {
  echo "A média de $a + $b + $c é ",$med, "<br \>";
}
else {
  echo "A média não é válida";
}
if ($med >= 9.5) {
  echo "O aluno está aprovado";
}
  else if($med < 9.5 and $med >= 8){
      echo "O aluno tem de ir a recuperação";
}
else{
  echo "O aluno está reprovado";
}

?>

  </body>
</html>
