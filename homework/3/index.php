<?php
    session_start();
    
    if(isset($_POST['professorName']))
    {$professorName = $_POST['professorName'];}
    if(isset($_POST['studentName']))
    {$studentName = $_POST['studentInput'];}
    if(isset($_POST['takenBefore']))
    {$taken = true;}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3</title>
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <h1>CSUMB Professor Evaluation</h1>
        <form method="POST" action="index.php">
            <div class="professorInput">
                <h3>Enter Professor's Name:</h3>
                <input name="professorName" type="text">
            </div>
            <br>
            </br>
            <div class="studentInput">
                <h3>Enter Your Name:</h3>
                <input name="studentName" type="text">
            </div>
            <br>
            </br>
            </div>
            </br>
            <div class="classSelection">
                <h3>Class Selection</h3>
                <select name="courses">
                    <option value="CST-336">CST-336: Internet Programming</option>
                    <option value="CST-312">CST-312: Computer Security</option>
                    <option value="CST-412">CST-412: Network Administration</option>
                </select>
                <h4>Have you taken this class before?</h4>
                <div class="takenClass">
                    YES<br>
                    <input type="checkbox" name="takenBefore" checked>
                </div>
                
            </div>
            <br>
            </br>
            <div class="satisfactoryGroup">
                <h2>From 1 to 3 how satisfied are you with this class?
                <br>(1 is unsatisfied and 3 is extremely satisfied)
                </h2>
                <div id="checkboxes">
                  <div class="checkboxgroup">
                    <label for="my_radio_button_id1">1</label>
                    <input type="radio" name="radio" id="my_radio_button_id1" />
                  </div>
                  <div class="checkboxgroup">
                    <label for="my_radio_button_id2">2</label>
                    <input type="radio" name="radio" id="my_radio_button_id2" checked/>
                  </div>
                  <div class="checkboxgroup">
                    <label for="my_radio_button_id3">3</label>
                    <input type="radio" name="radio" id="my_radio_button_id3" />
                  </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="submitButton">
                <input type="submit" name="submit" value="Submit Evaluation">
            </div>
        </form>
        <br>
        <div class="Results">
            <?php 
            if(!isset($_POST['professorInput']) || !isset($_POST['studentInput'])) 
            {
               echo "<h2>Sorry field(s) have been left blank try again.</h2>";
             
            }
            if(isset($_POST['professorInput']) && isset($_POST['studentInput']))
            {
                echo "<h2>Based on your evaluation $professorName will be fired!</h2>";
            }
            
            ?>
        </div>
    </body>
</html>