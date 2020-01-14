<?php
 require_once ('MysqliDb.php');

 $mysqli = new mysqli ('localhost', 'root', '', 'pod');
 $db = new MysqliDb ($mysqli);
?>