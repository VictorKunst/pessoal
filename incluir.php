<?php
require_once('conectar.php');


$msg = $_GET['msg'];

$sql= "insert into pessoa (nome) value ('$msg')";
mysql_query($sql) or die(mysql_error());
echo "O nome ".$msg." foi gravado";






?>