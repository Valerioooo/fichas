<?php
ob_start();

session_start();

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

echo "<hr /><pre>";print_r($_SESSION); echo "</pre>";

ob_end_flush();

 ?>
