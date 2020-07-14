<?php
    session_start();
    require_once"serverlog.php";
    $binding = @new mysqli($host,$db_user, $db_password,$db_name);
    $logged = 0;
    if($binding->connect_errno != 0){
        echo "error occurred";
    }else{
        echo "połączenie ustanowione";
        echo "hello world\n";
        $givenpass = $_POST['password'];
        $sql = "select * from passwords where password = '$givenpass'";
        $password = $_POST['password'];
        echo $password;
        if($ans = @$binding->query($sql)){
            $hmans = $ans->num_rows;
            if($hmans > 0){
                $logged = 1;
                header("location: index.php");
            }else{
                $logged = -1;
                header("location: log.php");
            }
            $_SESSION['logged'] = $logged;
        }
        $binding->close();
    }

?>