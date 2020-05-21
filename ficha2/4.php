<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

$num = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
for($i=0; $i < 20; $i++) {
$num[$i]=rand(1,10);
echo $num[$i], ' ';
}
$p = 0;
$ip = 0;

for($i=0; $i < 20; $i++) {
  if ($num[$i]%2 == 0){
    $p++;
    }
    else{ $ip++;
    }
}
echo "<br>O numero de numeros pares é: $p <br>";
echo "O numero de numeros impares é: $ip";
?>



  </body>
</html>
