<?php
include("auth.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard - Client area</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="form">
            <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
            <h2>Dashboard page.</h2>
            <p><a href="logout.php">Logout</a></p>
        </div>
    </body>
</html>
