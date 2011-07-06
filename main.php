
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

$resource = mysql_query(); //SELECT * FROM table WHERE condition

//here we will parse everything
while($row = mysql_fetch_row($resource)){
  echo $row[0]; 
}
//no more parsing; output handled by layout.php I guess - or we could put it at the bottom of this file

mysql_close($sql);

?>
