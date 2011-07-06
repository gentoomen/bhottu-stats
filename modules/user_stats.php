
<?

$top15 = "";
$resource = mysql_query("SELECT name, points FROM nickscore ORDER BY points DESC LIMIT 15");

while($row = mysql_fetch_row($resource)){
  $top15 = $top15 . "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>\n";
}

?>
