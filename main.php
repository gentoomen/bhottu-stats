/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * Emil Karlsson and DUke Derpington wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy us a beer in return. Emil Karlsson and Duke Derpington
 * ----------------------------------------------------------------------------
 */


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
include $modules_directory + 'post_count.php';
include $modules_directory + 'user_stats.php';

/* // ^these modules will load stuff like this -v
$resource = mysql_query();

while($row = mysql_fetch_row($resource)){
  echo $row[0]; 
}
*/

mysql_close($sql);

?>
