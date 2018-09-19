<?php

/*
0 rock
1 paper
2 scissors
*/

function play()
{
   
    
    do{
        for($j = 0; $j < 2; $j++)
        {
            ${"randVal" . $j} = random();
        }
    }while($randVal0 == $randVal1);
    echo "$randVal0 ";
    echo "$randVal1 <br>";
}

function random()
{
    return $randVal = rand(0,2);
}
function chooseWinner($randVal1, $randVal2)
{
    if($randVal1 == 0)
    {echo "0";}
}

?>