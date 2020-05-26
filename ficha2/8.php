<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
function randmed(){
        $arrint = array();
        $med = 0;
        $moda = array(0,0,0,0,0,0,0,0,0,0);
        $mediana = array(0,0,0,0,0,0,0,0,0,0);

          for ($i=0; $i < 10; $i++) {
          $arrint[$i] = rand(0, 9);
          echo $arrint[$i], ", ";
          $med += $arrint[$i];

          switch ($arrint[$i]) {
            case 0: $moda[0]++;break;
            case 1: $moda[1]++;break;
            case 2: $moda[2]++;break;
            case 3: $moda[3]++;break;
            case 4: $moda[4]++;break;
            case 5: $moda[5]++;break;
            case 6: $moda[6]++;break;
            case 7: $moda[7]++;break;
            case 8: $moda[8]++;break;
            case 9: $moda[9]++;break;
          }
          }
          $med /= 10;
          $modamax = 0;
          $modafinal = 0;
          for ($i=0; $i < 10; $i++) {
            if ($modamax <= $moda[$i]) {
              $modamax = $moda[$i];
              $modafinal = $i;
            }
          }

          $mediana = $arrint;
          sort($mediana);
          $mediana_Final = $mediana[4];


        echo "<br>"."Média: $med <br>";
        echo "Moda : $modafinal <br>";
        echo "mediana: $mediana_Final";
      }

      randmed();
?>



  </body>
</html>
