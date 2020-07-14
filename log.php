<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log4CV</title>
    <link href="style4log.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="logingwin">
    <form action="dbconnect.php" method="post">
        <div id="notification">
            proszę podać hasło w celu uwierzytelnienia
        </div>
        <div id="pole">
            <input type="password" name = "password">
            <input type="submit">
        </div>
        <div id="warrning">
            <?php
                if(isset($_SESSION['logged']) and $_SESSION['logged'] == -1){
                    echo "nieprawidłowe hasło";
                }
            ?>
        </div>
    </form>
</div>

</body>
</html>