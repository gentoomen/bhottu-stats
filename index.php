<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">








<? include "main.php"; ?>
 

<html>
    <head>
        <meta name="description" content="<?php echo("IRC channel stats for $irc_channel @ $irc_network"); ?>' />
        <meta name="keywords" content="<?php echo("IRC,Stats,$irc_channel,$irc_network,bhottu"); ?>' />
        <meta name="author" content="Gentoomen" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title><?php echo("$irc_channel @ $irc_network stats"); ?></title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        
    </head>
    <body>

            <table>
                <tr>
                    <td>Total line count:</td>
                    <td>Top 15:</td>
                    <td>Most banned person:</td>
                </tr>
                <tr>
                    <td><?php echo($linecount_total); ?></td>
                    <td><?php echo($top15); ?></td>
                    <td>nand</td>
                </tr>
            </table>
            
            <table>
                <tr><td>Top 15 bros:</td><td>The amount of posts they posted:</td><td>The last thing what they posted:</td></tr>
                <?php echo($top15); ?>
            </table>
           
            <table>
                <tr>
                <th class="headline"><b>Look up the line count of a specific bro</b></th>
                </tr><tr>
                <td class="lightbg">
                <form method="get" action="index.php">
                    <input type="text" name="name">&nbsp;
                    <input type="submit" value="Submit">
                </form></td>
                <?php if($_GET['name']);
                {
                    $nick = $_GET['name'];
                    echo("<td class=\"lightbg\"><b>$nick</b> has a line count of a whopping <b>$linecount_nick</b>!</td>");
                    echo("<td class=\"lightbg\">Last line said in channel: <b>$linecount_nick_last</b></td>");

            } ?>
    </body>
</html>
