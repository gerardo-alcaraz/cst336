<?php
// connect to our mysql database server

function getDatabaseConnection() {
    
    if($_SERVER['SERVER_NAME'] == "galcaraz-cst336-galcaraz.c9users.io"){ //running on cloud9
        $host = "localhost";
        $username = "Jerry";
        $password = "BabaBooey1";// best practice: define this in a seperate file
        $dbname = "meme_lab";
    } else{
        //running on heroku
        $host = "us-cdbr-iron-east-01.cleardb.net";
        $username = "b3a1549eb85a39";
        $password = "60394a49";// best practice: define this in a seperate file
        $dbname = "heroku_93246d737e1680c";
    }
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}

// echo "SERVER!!!!!!!!!!!!!!";
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
?>
