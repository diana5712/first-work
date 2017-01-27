<?php

$db = mysql_connect('localhost', 'Admin', '12345');

mysql_select_db('base2', $db);

mysql_query ("set_client='utf8'");

mysql_query ("set character_set_results='utf8'");

mysql_query ("set collation_connection='utf8_general_ci'");

mysql_query ("SET NAMES utf8");
 

?>