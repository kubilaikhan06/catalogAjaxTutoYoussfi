<?php
 $conn = mysql_connect('localhost', 'root', '') or die(mysql_error());
mysql_select_db('DB_CAT_DWM', $conn) or die (mysql_error());
?>