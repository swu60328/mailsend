<!doctype html>
<?php
session_start();
#$username =  $_SESSION["User"];
?>
<html>
    <head></head>
    <body>
        <h1> You are <?php echo $_SESSION["User"]; ?> </h1>
    </body>
</html>
