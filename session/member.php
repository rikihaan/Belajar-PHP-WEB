<?php
session_start();

$session = isset($_SESSION['login']) ? $_SESSION['login']:false;
if($session !=true){
    header('Location:/session/login.php');
    exit();
}

$say = "Hello ".$_SESSION['username_login'];
?>

<html>
    <head>
        <title>
            Member Page
        </title>
    </head>
    <body>
        <h5><?=$say;?></h5>
        <br>
        <br>
        <a href="/session/logout.php">Logut</a>
    </body>
</html>