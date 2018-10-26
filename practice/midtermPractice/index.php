<?php
    session_start();
    $month = $_POST['months'];
    $numberOfLocations = $_POST['numLocations'];
    $country = $_POST['countries'];
    $order = $_POST['alphaOrder'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Winter Vacation Planner</title>
        <link rel="stylesheet" href="styles/styles.css" type="text/css" />
    </head>
    <body>
        <div class="title">
            <h1>Winter Vacation Planner !</h1>
        </div>
        <div class="selectOptions">
            <form action="index.php" method="post">
                Select Month:
                <select name="months">
                    <option selected value="select">Select</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                </select>
                <br>
                <br>
                <div class="numLocations">
                    Number of Locations: 
                    <input type="radio" name="numLocations" value="3"/>Three
                    <input type="radio" name="numLocations" value="4"/>Four
                    <input type="radio" name="numLocations" value="5"/>Five
                </div>
                <br>
                <div class="selectCountry">
                    Select Country:
                    <select name="countries">
                        <option selected value="USA">USA</option>
                        <option value="Mexico">Mexico</option>
                        <option value="France">France</option>
                    </select>
                </div>
                <br>
                <div class="alphaOrder">
                    Visit Locations in alphabetical order:
                    <input type="radio" name="alphaOrder" value="descending"/>A-Z
                    <input type="radio" name="alphaOrder" value="ascending"/>Z-A
                </div>
                <br>
                <div class="button">
                    <input type="submit" name="submit" value="Create Itinerary"/>
                </div>
            </form>
        </div>
        
        <div class="output">
            <?php 
            if($_POST['months'] == select) 
            {echo '<h1 align=center color="red"> Please Select a Month. </h1>';}
            if(!isset($_POST['numLocations']))
            {echo '<h1 align=center color="red"> Number of Locations is not set. </h1>';}
            
            if($_POST['months'] != select && isset($_POST['numLocations']))
            {
                echo "<h1 align=center>$month Itinerary</h1>";
                echo "<h1 align=center>Visiting $numberOfLocations places in $country</h1>";
                
            }
            
            ?>
        </div>
        

    </body>
</html>