<?php
print_r($_POST);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Midterm Review Session</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            Select Letter
            <select name="letterToFind">
                <?php
                    for($i = 65; $i < 65+26; $i++)
                    {echo "<option value=" . chr($i) .">" . chr($i) ."</option>";}
                ?>
            </select>
            <br><br>
            Table Size
            <select name="dimensions">
                <?php
                    for($i = 6; $i <= 10; $i++)
                    {echo "<option value=" . $i . ">" . $i . " x " . $i ."</option>";}
                ?>
            </select>
            <br><br>
            Omit Letter
            <select name="omitLetter">
                <?php
                    for($i = 65; $i < 65+26; $i++)
                    {echo "<option value=" . chr($i) .">" . chr($i) ."</option>";}
                ?>
            </select>
            <br><br>
            <button type="submit">Submit</button>
        </form>
        
        <?php
        if($_POST['letterToFind'] != $_POST['omitLetter'])
        {
            echo "<table>";
            for($i = 0; $i < $_POST['dimensions']; $i++)
            {
                echo "<tr>";
                for($j = 0; $j < $_POST['dimensions']; $j++)
                {
                    $temp = chr(rand(65, 90));
                    if($temp == $_POST['omitLetter'])
                    {
                        $j--;
                    }
                    else
                        echo "<td>" .$temp . "</td>";
                }
            }
            echo "</table>";
        }
        else
        {
            echo "Letter to find and the Omitted Letter can't be the same! Try Again.";
        }
        ?>
    </body>
</html>