
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
                <input type="submit" value="Search for that bro" />
            </form>
        </center>
    </body>
</html>
