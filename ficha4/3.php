<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    setcookie('nome','RC', time()+3600);
    setcookie('Apelido','pp', time()+3600);
    echo "<hr /><pre>";print_r($_COOKIE);echo '<pre>';
    ?>
  </body>
</html>
<!--
Respostas:
3.
a) nome, valor e expiração.

b) Esta instrução possui apenas os parametros necessários.

 -->
