<?php
    include 'database.php';
    function test(){
    if(isset($_POST)){
        
        $_POST['quote'] = $quote;
        $_POST['author'] = $author;
    }
    else{
        echo "post is not set";
    }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Create.php</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <h1>Create a new quote:</h1>
        <form method="post">
            <br>
            Text: 
            <input type="text" name="quote"s></input>
            <br></br>
            Author:
            <input type="text" name="author"></input>
            <br></br>
            <input type="submit"></input>
            
        </form>
        
        <?php
        function displayErrors()
        {
            if(!isset($_POST['quote']) || $_POST['quote'] == "")
            {
                echo "<h4>Text must not be empty<br></h4>";
            }
            if(!isset($_POST['author']) || $_POST['author'] == "")
            {
                echo "<h4>Author must not be empty<br></h4>";
            }
            else
            {
                $quote = $_POST['quote'];
                $author = $_POST['author'];
                
                $dbConn = getDatabaseConnection();
                $sql = "INSERT INTO `q_quotes` (`quoteID`, `quote`, `author`, `num_likes`) VALUES (NULL, '$quote', '$author', 10)";
                $statement = $dbConn->prepare($sql);
                $statement->execute();
                

            }
        }
        displayErrors();
        
        echo $author;
        echo $quotes;
        
        test();
        ?>
        
    </body>
</html>