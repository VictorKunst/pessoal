<?php
require_once('conectar.php');

$id = $_GET['id'];

$sql="delete from pessoa where id='$id'";
mysql_query($sql) or die (mysql_error());
echo "O id ".$id." foi excluido";

 ?>