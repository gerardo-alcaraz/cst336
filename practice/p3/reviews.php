<?php

include 'inc/charts.php';
$posters = array("ready_player_one","rampage","paddington_2","hereditary","alpha","black_panther","christopher_robin","coco","dunkirk","first_man");

echo"PRESLICE:<br>";
echo"<pre>";
var_dump($posters);
echo"</pre>";

function movieReviews() {
    global $posters;
    
    $randomPostNumber = rand(0, count($posters)-1);
    echo "Random post nubmer: $randomPostNumber <br>";
    $randomPoster = $posters[$randomPostNumber];
    echo $randomPoster;
    echo "Random poster: $randomPoster <br>";
    array_splice($posters, ($randomPosterNumber-1), 1);
    
    echo"POSTSLICE:<br>";
    echo"<pre>";
    var_dump($posters);
    echo"</pre>";
    
    
    echo "<div class='poster'>";
    echo "<h2> $randomPoster </h2>";
    echo "<img width='100' src='img/posters/$randomPoster.jpg'>";    
    echo "<br>";
    
    //NOTE: $totalReviews must be a random number between 100 and 300
    $totalReviews = rand(100,300); 
    
    //NOTE: $ratings is an array of 1-star, 2-star, 3-star, and 4-star rating percentages
    //      The sum of rating percentages MUST be 100
    
    //$ratings = array(30,20,40,10);
    $ratingsRemaining = 100;
    $ratings = array();
    echo "Ratings before: $ratingsRemaining <br>";
    $randrate = rand(1, 90);
    echo "RANDRATE: $randrate<br>";
    array_push($ratings, $randrate);
    $ratingsRemaining -= $randrate;
    echo "RATINGSREMAING: $ratingsRemaining<br>";
    
    for($j = 0; $j < 2; $j++)
    {
        echo "<br> Rating : $ratingsRemaining <br>";
        $randRating = rand(1, $ratingsRemaining);
        echo "Generated: $randRating <br>";
        array_push($ratings, $randRating);
        $ratingsRemaining -= $randRating;
        
    }
    
    array_push($ratings, $ratingsRemaining);
    echo "Last: $ratingsRemaining <br>";
    
    //NOTE: displayRatings() displays the ratings bar chart and
    //      returns the overall average rating
    $overallRating = displayRatings($totalReviews,$ratings);
    echo"<br>";
    //NOTE: The number of stars should be the rounded value of $overallRating
    $stars = round($overallRating);
    
    for($i = 0; $i < $stars; $i++)
    {
        echo "<img src='img/star.png' width='25'>";
        //echo "<img src='img/star.png' width='25'>";
    }
    
    echo "<br>Total reviews: $totalReviews";
    echo "</div>";
}    

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Movie Reviews </title>
        <style type="text/css">
            body {
                text-align:center;
            }
            #main {
                display:flex;
                justify-content: center;
            }
            .poster {
                padding: 0 10px;
            }
        </style>
    </head>
    <body>
       
       <h1> Movie Reviews </h1>
        <div id="main">
           <?php
             //NOTE: Add for loop to display 4 movie reviews
             for($i = 0; $i < 4; $i++)
             {
                movieReviews(); 
             }
           ?>
       </div>
       <br/>
       <hr>
       <h1>Based on ratings you should watch:</h1>
       
    </body>
</html>