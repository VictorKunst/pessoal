<?php
require_once('conectar.php');

$id = $_GET['id'];
$msg = $_GET['msg'];



$sql="update pessoa set nome='$msg' where id='$id'";
mysql_query($sql) or die(mysql_error());
echo "O id ".$id." foi alterado";







?>
