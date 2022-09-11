<?php
//  untuk memulai session kita wajib memamanggil function session start
session_start();
// cek apakah ada session login ?
$session = isset($_SESSION['login']) ? $_SESSION['login']:false;
if($session==true){
    // jika ada session login arahkan lngsung ke halaman member
    header('Location:/session/member.php');
    exit();
}

// buat variable untuk menampung peasa
$error="";

// jika ada request method post 
if($_SERVER['REQUEST_METHOD']=="POST"){

    // cek inpus dari user login
    if($_POST['username']=="riki" && $_POST['password']=="riki"){
        // buat/ registrasikan session login
        $_SESSION['login']=true;
        $_SESSION['username_login']="Asep Riki";
        $error="Login Success";
        header('Location: /session/member.php');
        exit();
    }else{
        $error="Login Gagal";
    }
}

?>

<html>
    <head>
        <title>
            Login Page
        </title>
    </head>
    <body>
        <div>
            <?php if($error !=""){?>
                <?= $error?>
            <?php }?>
        </div>
        <form action="/session/login.php" method="post">
            <label for="username">
                username :
                <input type="text" name="username" id="username">
            </label>
            <br>
            <br>
            <label for="password">
                Password :
                <input type="password" name="password" id="password">
            </label>
            <br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>