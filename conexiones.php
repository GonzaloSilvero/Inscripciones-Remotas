<?php
//
$servidor='localhost';
$usuario='root';
$password='';
$basededatos='sorteo';

$db=mysql_connect($servidor,$usuario,$password,$basededatos);
mysql_query($db,"set names 'utf8'");
?>