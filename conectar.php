<?php
$servidor='localhost';
$usuario='root';
$senha='';
$banco='exercicio';
//comando para conectar com BD mysql
$conexao=  mysql_connect($servidor,$usuario,$senha);
//comando para selecionar o BD que vai utilizar
$base_dados= mysql_select_db($banco);
mysql_query("SET NAMES 'utf8'");
?>