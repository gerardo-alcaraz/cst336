<?php
    include "database.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reports</title>
    </head>
    <body>
        <?php
        function display()
        {
            $dbConn = getDatabaseConnection();
            
            $sql = "SELECT * FROM `mp_town` WHERE population > 50000 AND population < 80000";
            
            $statement = $dbConn->prepare($sql);
            
            $statement->execute();
            $records = $statement->fetchAll();
            
            foreach($records as $record)
            {
                echo "Town Name: " . $record['town_name'] . " - " . $record['population'];
            }
            
        }
        
        function descending()
        {
            $dbConn = getDatabaseConnection();
            
            $sql = "SELECT * FROM `mp_town` WHERE population ORDER BY population DESC";
            
            $statement = $dbConn->prepare($sql);
            
            $statement->execute();
            $records = $statement->fetchAll();
            
            foreach($records as $record)
            {
                echo $record['town_name'] . "   " . $record['population'];
                echo "<br>";
            }
        }
        
        function leastPopulated()
        {
            $dbConn = getDatabaseConnection();
            
            $sql = "SELECT * FROM `mp_town` WHERE population < 27175 ORDER BY population";
            
            $statement = $dbConn->prepare($sql);
            
            $statement->execute();
            $records = $statement->fetchAll();
            
            foreach($records as $record)
            {
                echo $record['town_name'] . "   " . $record['population'];
                echo "<br>";
            }
        }
        
        function countiesWithS()
        {
            $dbConn = getDatabaseConnection();
            
            $sql = "SELECT * FROM `mp_county` WHERE county_name LIKE 'S%'";
            
            $statement = $dbConn->prepare($sql);
            
            $statement->execute();
            $records = $statement->fetchAll();
            
            foreach($records as $record)
            {
                echo $record['county_name'];
                echo "<br>";
            }
        }
        
        
        ?>
        <?php
        display();
        echo "<br> <br>";
        descending();
        echo "<br> <br>";
        leastPopulated();
        echo "<br> <br>";
        countiesWithS();
        
        ?>
    </body>
</html>