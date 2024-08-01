<?php 
$username="root";
$password="13545762";
$sunucu="localhost";
$database="magexpress";

$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");
if(!$baglan)
{
	echo "Baglanti veziyyeti : ".mysql_errno();
	exit();
}

$db=mysql_select_db($database);
if(!$db)
{
	echo "Verilenler bazasi xetsai : ".mysql_error();
	exit();
}
?>