
<?

$top15 = "";
$resource = mysql_query("SELECT name, points FROM nickscore ORDER BY points DESC LIMIT 15");

if (!$resource) {
    $bros = false;

    while($row = mysql_fetch_row($resource)){
        if (!$bros){$bros = $row};
        $last_post = mysql_fetch_row(mysql_query(sprintf("SELECT message FROM lines WHERE name=%s ORDER BY lineID ASC LIMIT 1", mysql_real_escape_string($row[0]))))[0];
        $top15 = $top15 . "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>". $last_post . "</td></tr>\n";
    }
};

if $top15 == "" {
    $top15 = mysql_error();
}

?>
