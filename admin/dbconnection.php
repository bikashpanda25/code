<?php
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password ="";
$mysql_database ="php_shopping";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("oops !Could not connect database");
mysql_select_db($mysql_database, $bd) or die("opps! database not connected");

?>