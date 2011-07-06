<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<? include "main.php" ?>

<html>
    <head>
        <meta name="description" content="<?php echo('IRC channel stats for $irc_channel @ $irc_network') ?>" />
        <meta name="keywords" content="<?php echo('IRC,Stats,$irc_channel,$irc_network,bhottu') ?>" />
        <meta name="author" content="Gentoomen" />
        <meta http-equiv="content-type" content="text/x-php;charset=UTF-8" />
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <td>Total line count:</td>
                    <td>Top 15:</td>
                    <td>Most banned person:</td>
                </tr>
                <tr>
                    <td><? echo($linecount_total) ?></td>
                    <td><? echo($top15) ?></td>
                    <td>nand</td>
                </tr>
            </table>
            
            <table>
                <tr><td>Top 15 bros by amount of posts:</td></tr>
                <?= $top15 ?>
            </table>
           
            <table>
                <tr>
                <td class="headline"><b>Look up the line count of a specific bro</b>
                </tr><tr>
                <form method="get" action="index.php">
                    <input type="text" name="name" />
                    <input type="submit" value="Look up the line count of a specific bro" />
                </form>

            } ?>
        </center>
    </body>
</html>
