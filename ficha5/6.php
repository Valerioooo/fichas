<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
   <form name = "form" action="" method="post">
     Nome:
     <input type = "text" name = "name">
     <input type = "submit" value= "Iniciar Sessão" name="sendform">
   </form>
   <?php
     if(isset($_SESSION['sendform'])){
       $ses['id'] = session_id();
       $ses['on'] = time();
       $ses['off'] = time() + 30;
       $ses['ip'] = $_SERVER['REMOTE_ADDR'];
       $ses['nome'] = $_POST['nome'];

       $_SESSION['user'] = $ses;

       header('Location'.$_SERVER['PHP_SELF']);
     }

     if(empty($_SESSION['user'])){
       echo '<form name = "form" action="" method="post">
             Nome:
             <input type = "text" name = "name">
             <input type = "submit" value= "Iniciar Sessão" name="sendform">
             </form>';
     }
     else{
       $tempoLog = $_SESSION['user']['on'];
       $tempoAgora = time();
       $tempoOnLine = $tempoAgora - $tempoLog;
       $tempoFim = $_SESSION['user']['off'] - $tempoAgora;
       echo 'ola'.$_SESSION['user']['nome'].' Esta logado a '.$tempoLog.'segundos';
       echo 'O seu IP é'.$_SESSION['user']['ip'];
     }
   ?>
 </body>
</html>
