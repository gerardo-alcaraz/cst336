<?php
// connect to our mysql database server

function getDatabaseConnection() {
    $host = "localhost";
    $username = "Jerry";
    $password = "BabaBooey1";// best practice: define this in a seperate file
    $dbname = "c9";
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}

?>
