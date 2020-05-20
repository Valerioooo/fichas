<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

$a = 20;
$i = 0;

while ($i <= $a) {
  if($i % 2 == 0){
    echo $i,"<br \>";
  }
  $i++;
}

echo "<br \><br \>";
$i=0;

do{
  if($i % 2 == 0){
    echo $i,"<br \>";
  }
  $i++;
}while($i <= $a);

?>

  </body>
</html>
