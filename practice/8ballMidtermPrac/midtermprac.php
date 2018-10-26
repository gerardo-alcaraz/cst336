<?php
// THESE ARE THE INSTRUCTIONS
/*
    1. Getting all the form inputs (number of rows, columns, include-8-ball)
    2. Displaying the grid with the appropriate dimensions (put dummy text in here for now)
    3. Fill the grid with random numbers from 0 to 15. Make sure that none repeat
    4. Swap in the images of the balls
    5. Add in the include-8-ball logic
    6. Add logic for computing the winner. Show the different background colors for even vs ordd.
    7. Keeping a tally of the history of wins for evens vs odds.
    8. Add validation logic
    
    Step 1:
        - Write the html for all the form elements
        - Handle the form submission inside php ==> check the $_GET array for all the form inputs
        - Print out all the form outputs
    
    Step 2: 
        - Create a table using php
        - echo all the html involved in creating a table (<table>, <tr>, <td>)
        - Nested loop, create appropriate number of rows
        - Inside  each row, create the appropriate number of columns (<td>)
        - Inside each <td>, put some dummy text for now saying "hello"
        
    Step 3
        - Initialize an array of 16 numbers (0,1,2,....15)
        - shuffle the array
        - pop off one element at at time as you populate your grid
        
    Step 4
        - make sure you construct the file path correctly
        - use our random numbers to generate a image url path
        - echo out the html for an image (<img >)
    
    Step 5
        - Select nxm balls from our array of numbers
        - If we're including the 8 ball, remove one ball from set of selected balls
        - add in the 8 ball
        
    Step 6
        - Before the double nested loop, keep a tally of score counts for evens vs odds
        - Initialize counts to 0
        - As I'm going through the table, check if the ball is even or oddd. Add to the appropritate score
        - After the double loop, check to see who is the winner and print out a message
     
    Step 7
        - Add two variables to our session: evenWins and oddWins
        - if these are not set, then initialize both to zero
        - When we compute the winner, increment either evenWins or OddWins
        - to clear the history, create another form, when the form submits, go to another
        clear-history.php
        - clear-history.php should set the values back to 0;
      */
?>

<?php

    session_start();
    
    if (!isset($_SESSION['evenWins']) || !isset($_SESSION['oddWins'])){
        $_SESSION['evenWins'] = 0;
        $_SESSION['oddWins'] = 0;
    }

    
    $numRows = 3;
    $numColumns = 3;
    $include8Ball = false;
    //$ballNums = array(0, 1, 2, 3, 4, 5, 6, 7,
    //8, 9, 10, 11, 12, 13, 14, 15);
    //shuffle($ballNums);
    //$ballPics = array(0=>'imgs/0.png',1=>'imgs/1.png',2=>'imgs/2.png',
    //3=>'imgs/3.png', 4=>'imgs/4.png', 5=>'imgs/5.png', 6=>'imgs/6.png',
    //7=>'imgs/7.png', 8=>'imgs/8.png', 9=>'imgs/9.png', 10=>'imgs/10.png', 
    //11=>'imgs/11.png', 12=>'imgs/12.png', 13=>'imgs/13.png', 14=>'imgs/14.png',
    //15=>'imgs/15.png');
    
    if (isset($_POST['numRows']) && !empty($_POST['numRows'])){
        $numRows=$_POST['numRows'];
    }
    if (isset($_POST['numColumns']) && !empty($_POST['numColumns'])){
        $numColumns=$_POST['numColumns'];
    }
    if (isset($_POST['include-8-ball'])){
        $include8Ball = true;
    }
    echo "numRows: $numRows <br/>";
    echo "numCols: $numColumns <br/>";
    echo "Include 8 ball: $include8Ball <br/>";
    
    $ballNums = array(0, 1, 2, 3, 4, 5, 6, 7,
        9, 10, 11, 12, 13, 14, 15);
    shuffle($ballNums);
    
    $numberOfBallsToSelect=$numRows * $numColumns;
    $selectedBalls = array_slice($ballNums, 0, $numberOfBallsToSelect);
    
    if ($include8Ball){
        $numberOfBallsToSelect -= 1;
        array_pop($selectedBalls);
        array_push($selectedBalls, 8);
        shuffle($selectedBalls);
    } else {
        
    }
    
    
    $evenScore = 0;
    $oddScore = 0;
    
    // Generate the html for the table
    echo "<table>";
    for ($i=0; $i<$numRows; $i++){
        echo "<tr>";
        for ($j=0; $j<$numColumns; $j++){
            echo "<td>";
            $ballNums = array_pop($selectedBalls);
            $imgURL = "./imgs/" . $ballNums . ".png";
            echo "<img src='$imgURL'/>";
            //echo array_pop($ballNums);
            echo "</td>";
            
            if ($ballNums % 2 == 0){
                $evenScore += $ballNums;
            } else {
                $oddScore += $ballNums;
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<div> Even Score: $evenScore, Odd Score: $oddScore </div>";
    if ($evenScore > $oddScore){
        echo "<div> Even wins! </div>";
        $_SESSION['evenWins'] += 1;
    } else {
        echo "<div> Odd wins! </div>";
        $_SESSION['oddWins'] += 1;
    }
    
    echo "<div> Even's record: " . $_SESSION['evenWins'] . ", Odd's Record: " . $_SESSION['oddWins'] . "</div>";
    echo "<form action='clear-history.php'>";
    echo "<input type='submit' name='clear-history' value='Clear history'/>";
    echo "</form>";
    
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form method="post">
        Enter rows:
            <input type="text" name="numRows"/>
        Enter columns:
            <input type="text" name="numColumns"/>
        <br>
        Include 8 ball: 
            <input type="checkbox" name="include-8-ball" value="yes">
        <br>
            <input type="submit" value="Display"/>
        </form>
        <br>
        <?php//numRows_numColumns();?>
    </body>
</html>