<?php
    include 'database.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>cst336_midterm.php</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php
        function display()
        {
            $dbConn = getDatabaseConnection();
            $sql = "SELECT * FROM `q_quotes`";
            $statement = $dbConn->prepare($sql);
            $statement->execute();
            $records = $statement->fetchAll();
            $arrayRecords = $records[array_rand($records)];
            echo "<h1>" . $arrayRecords['quote'] .  "</h1>";
            echo "<h3>" . "-" . $arrayRecords['author'] .  "</h3>";
        }
        display();
        ?>
        <form method="post" action="create.php">
            <input type="submit"></input>
        </form>
        <h1></h1>
    </body>
</html>