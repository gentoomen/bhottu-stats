<?

include "config.php";

$sql = mysql_connect($db_server, $db_user, $db_pass);

if (!$sql) {
	die('No connection to SQL server - ' . mysql_error());
}

$db_conn = mysql_select_db($db_name, $sql);

if (!$db_conn) {
	die('No connection to database - ' . mysql_error());
}

//load modules here
//I named them after the variables which they return
include $modules_directory + 'linecount_total.php';
include $modules_directory + 'top15.php';

/*
NOTE:

$resource = mysql_query();
while($row = mysql_fetch_row($resource)){
	echo $row[0];
}

*/

mysql_close($sql);
?>
