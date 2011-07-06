
<?php

$linecount_nick = sprintf("SELECT COUNT(*) FROM %s WHERE name='%s'",
	mysql_real_escape_string($tablename),
	mysql_real_escape_string($_GET['name']));

$linecount_total = mysql_query('SELECT COUNT(*) FROM lines');
