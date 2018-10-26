<?php
//Plan:
//1. Generate a random number ==> store it in the session
//2. Have a form where user can enter their guess
//3. Form validation login ==> determine whether the guess is to high/low
//4. Store the history in the session
//5. Clear the session when the user clicks "start over"
session_start();

if(isset($_POST['destroy'])){
    session_destroy();
    session_start();
}

if(!isset($_SESSION['randomVal'])){
    $_SESSION['randomVal'] = rand(1,100);
}

/*
//Checking if guess == random value
if(isset($_POST['guess']))
{
    // $_POST['guess'] == $_SESSION['randomVal'];
    if($_POST['guess'] == $_SESSION['randomVal'])
    {
        // $result = '<span style="color:green;">Correct!</span>';
        echo '<span style="color:green;">Correct!</span>';
    }
    else if($_POST['guess'] > $_SESSION['randomVal'])
    {
        // $result = 'span style="color:red;">TOO HIGH</span>';
        echo '<span style="color:red;">TOO HIGH</span>';
    }
    else if($_POST['guess'] < $_SESSION['randomVal']) //don't need if part in here (?) could just be "else"
    {
        // $result = 'span style="color:red;">TOO LOW</span>';
        echo '<span style="color:red;">TOO LOW</span>';
    }
    
    $_SESSION['guessHistory'][] = $_POST['guess'];
    $_SESSION['attempts']++;
}
*/



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sessions Challenge Activity</title>
    </head>
    <body>

        <form method="post">
            Guess the number between 1 and 100 <br/>
        
            Your guess:
            <input type="text" name="guess" placeholder="Guess"/>
            <input type="submit" name="submit" value="Submit"></input> <br/>
            
            <br>
            
            <?php
                // $result = "";
                
                // echo $result;
                
                
                
                //Checking if guess == random value
                if(isset($_POST['guess']))
                {
                    // $_POST['guess'] == $_SESSION['randomVal'];
                    if($_POST['guess'] == $_SESSION['randomVal'])
                    {
                        // $result = '<span style="color:green;">Correct!</span>';
                        echo '<span style="color:green;">Correct!</span><br/><br/>';
                    }
                    else if($_POST['guess'] > $_SESSION['randomVal'])
                    {
                        // $result = 'span style="color:red;">TOO HIGH</span>';
                        echo '<span style="color:red;">TOO HIGH</span><br/><br/>';
                    }
                    else if($_POST['guess'] < $_SESSION['randomVal']) //don't need if part in here (?) could just be "else"
                    {
                        // $result = 'span style="color:red;">TOO LOW</span>';
                        echo '<span style="color:red;">TOO LOW</span><br/><br/>';
                    }
                    
                    $_SESSION['guessHistory'][] = $_POST['guess'];
                
                    $_SESSION['attempts'] = count($_SESSION['guessHistory']) - 1;
                }

                
                
                
                
            
                echo "Previous guesses: ";
                foreach($_SESSION['guessHistory'] as $guess)
                    echo $guess . " ";
                    
                echo "<br/> Number of Attempts: ";
                    echo $_SESSION['attempts'];
            ?>
            
            <br>
            <input type="submit" name="destroy" value="Start Over"></input>
        </form>
        
        <!--<br>Random number: <?php echo $_SESSION['randomVal']?>-->
        
    </body>
</html>