<?php
session_start();
if(!isset($_SESSION["user_id"])) {
   header("Location: ./login.php");
   exit;
}
?>


<html>
    <head>

    </head>

    <body>
        <h1>Welcome <?= htmlspecialchars($_SESSION["user_name"]) ?></h1>
    </body>

</html>
