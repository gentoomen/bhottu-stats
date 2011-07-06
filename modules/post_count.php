/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * Emil Karlsson and DUke Derpington wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy us a beer in return. Emil Karlsson and Duke Derpington
 * ----------------------------------------------------------------------------
 */


<?php

$linecount_nick = sprintf("SELECT COUNT(*) FROM %s WHERE name='%s'",
	mysql_real_escape_string($tablename),
	mysql_real_escape_string($_GET['name']));

$linecount_total = mysql_query('SELECT COUNT(*) FROM lines');
