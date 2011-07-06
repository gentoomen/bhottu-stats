<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<? include "main.php" ?>

<html>
    <body>
        <center>
            <table>
                <tr>
                    <td>Total Post count:</td>
                    <td>Most talkative bro:</td>
                    <td>Most banned person:</td>
                </tr>
                <tr>
                    <td><? echo($post_count) ?></td>
                    <td><? echo($bros[0]) ?></td>
                    <td>nand</td>
                </tr>
            </table>
            
            <table>
                <tr><td>Top 15 bros by amount of posts:</td></tr>
                <?= $top15 ?>
            </table>
           
            <form method="get" action="index.php">
                <input type="text" name="name" />
                <input type="submit" value="Look up the line count of a specific bro" />
            </form>
            <?php if($_GET['name']){echo('<p>This bro has written $linecount_nick lines.</p>')} ?>
        </center>
    </body>
</html>
