<?php
if(isset($_GET['key'] ) && $_GET['key']=='rahasiah') {
   header('Content-Disposition:attacment; filename="profile.jpg"');
   header('Content-Type: image/jpeg');
   readfile(__DIR__."/file/FU1.jpg");
}else{
    echo "invalid Link";
}