<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
function nParImpar(){
        $par = 0;
        $imp = 0;
        $arrint = array();
        $n = rand(1, 100);

          for ($i=0; $i < $n; $i++) {
          $arrint[$i] = rand(1, 10);
          echo $arrint[$i], "<br>";

            if($arrint[$i] % 2 == 0){
              $par++;
            }
            else {
              $imp++;
            }
          }
        echo "<br>"."N = $n", "<br>";
        echo "<br>"."Números pares: $par", "<br>";
        echo "Números ímpares: $imp";
      }

      nParImpar();
?>



  </body>
</html>
