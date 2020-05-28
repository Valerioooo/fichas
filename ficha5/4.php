<?php
$_SESSION['nome'] = 'Rc';
$_SESSION['teste'] = 'pp';

unset($_SESSION['nome']);
unset($_SESSION['teste']);
echo '<pre>'; print_r($_SESSION); echo '<pre>';

  ?>
