<?php
$currentCount = GET
$currentCount++;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
        <div> 
            Count: <?php echo $currentCount; ?>
        </div>
        
        <div>
            <a href="index.php?count=<<?php echo $currentCount ?>">Clieck me to increment</a>
        </div>

    </body>
</html>