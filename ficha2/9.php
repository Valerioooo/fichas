<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
function calc(){
        $A = 2;
        $B = 3;
        $C = 2;
        $D = 2;
        $soma = $A + $C;
        $mult = $B * $D;

        if($soma > $mult){
          echo "A+C é maior que B+D";
        }
        elseif($soma < $mult){
          echo "A+C é menor que B+D";
        }
        else{
          echo "A+C é igual a B+D";
        }
      }

      calc();
 ?>



  </body>
</html>
