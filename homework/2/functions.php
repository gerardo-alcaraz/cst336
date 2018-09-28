<?php


function populatePlanets($planets)
{
    for($i = 1; $i < 9; $i++)
    {
        $imagePath = "images/" . $i . ".png";
        $planets[$i]["path"] = $imagePath;
    }
    return $planets;
}


function printArray($planets)
{
    echo"<br>";
    var_dump($planets);
    echo"<br>";
}
$planets = array();
$planets = populatePlanets($planets);

function displayPlanets($planets)
{
    for($i = 1; $i < 9; $i++)
    {
        if($i == 6)
        {
            echo '<img src="' . $planets[$i]["path"]. '" height="200" width="290" hspace="20">';    
        }
        else
        echo '<img src="' . $planets[$i]["path"]. '" height="200" width="200" hspace="20">';
    }
}

function show()
{
    $planets = array();
    $planets = populatePlanets($planets);
    displayPlanets($planets);
    
}
show();
//<!--echo '<img src="images/1.png"/>';-->
?>