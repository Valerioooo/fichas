<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

include("5.php");
echo 'A versão do PHP atual é: '.PHPVERSION().phpinfo(INFO_CONFIGURATION), "<br>";
echo "IP do Cliente= ". $_SERVER['REMOTE_ADDR']."<br>";
echo "", $_SERVER['PHP_SELF'];
echo "<br> IP server= ".$_SERVER['SERVER_ADDR'], "<br>";
echo "Port: ".$_SERVER['SERVER_PORT'], "<br>";
echo "Protocolo do Servidor: ". $_SERVER['SERVER_PROTOCOL'], "<br>";
echo "Nome do Servidor: ".$_SERVER['SERVER_NAME'], "<br>";
echo "<br> Browser: ".$_SERVER['HTTP_USER_AGENT'];
echo "<br> Sistema Operativo: ".PHP_OS;
?>



  </body>
</html>
