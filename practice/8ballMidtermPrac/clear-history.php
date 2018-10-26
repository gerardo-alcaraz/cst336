<?php
    session_start();
    $_SESSION['evenWins'] = 0;
    $_SESSION['oddWins'] = 0;
    session_destroy($_SESSION['evenWins']);
    session_destroy($_SESSION['oddWins']);
    header("Location: midtermprac.php");
?>

<!DOCTYPE html>
<html>
    <body>
        History cleared!
        <br>
    </body>
</html>