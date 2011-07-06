/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * Emil Karlsson and DUke Derpington wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy us a beer in return. Emil Karlsson and Duke Derpington
 * ----------------------------------------------------------------------------
 */


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
                <? /*generate row for each dude*/ ?>
            </table>
            
            <form method="get" action="index.php">
                <input type="text" name="name" />
                <input type="submit" value="Search for that bro" />
            </form>
        </center>
    </body>
</html>
