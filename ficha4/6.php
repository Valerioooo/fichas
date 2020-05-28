<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    foreach($cookies as $key => $value) {
      setcookie($key,null, time()+3600);
    }
    echo "<hr /><pre>";print_r($_COOKIE);echo '<pre>';
    ?>
  </body>
</html>
