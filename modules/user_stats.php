
<?

$resource = mysql_query("SELECT name, points FROM nickscore ORDER BY points DESC LIMIT 15");

while($row = mysql_fetch_row($resource)){
  echo $row[0]; 
}

def showTop(channel, sender, amount):
    """Shows the highest ranking users."""
    if amount == None:
        amount = 10
    if amount < 0:
        return
    summary = ''
    index = 1
    for (name, points) in dbQuery():
        summary += "%i. %s [%i] " % (index, name, points)
        index += 1
    sendMessage(channel, summary.strip())


?>
