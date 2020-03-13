<?php


session_start();

if($_SESSION['uid'])
{
    echo $_SESSION['id']
}
else{
    echo"error.";
}



?>