<?php 

//this connect a mysql //
//$con is a variable //
$con = mysqli_connect('localhost', 'root' , '' , 'sms');

if ($con == false)
{
    echo "Connection is not done";
    }

    else
    {
//echo "Connection ok";
    }
?>