<!doctype html>
<?php
session_start();
?>
<html>
    <head></head>
    <body>
        <h1> You are not  <?php echo $_SESSION['User']; ?> </h1>
    </body>
</html>
