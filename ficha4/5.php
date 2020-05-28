<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $cookies['nome'] = 'joao';
    $cookies['Apelido'] = 'Alberto';
    $cookies['idade'] = '20';
    $cookies['morada'] = 'rua das 12 casas nr 13';

    foreach($cookies as $key => $value) {
      setcookie($key,$value, time()+3600);
    }
    echo "<hr /><pre>";print_r($_COOKIE);echo '<pre>';
    ?>
  </body>
</html>

<!--
Respostas:
a) Ambas as funções são formas de encriptar os valores das cookies
-->
