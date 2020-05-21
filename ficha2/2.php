<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php


$a = array("a" => "maçã", "b" => "banana");
$b = array("a" =>"kiwi", "b" => "ananás", "c" =>"morango");

foreach($a as $value) {
  echo $value." ";
}
foreach($b as $value) {
  echo $value." ";
}

echo"<br \>";

foreach($b as $value) {
  echo $value." ";
}
foreach($a as $value) {
  echo $value." ";
}




?>



  </body>
</html>
