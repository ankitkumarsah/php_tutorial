<?php


session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('loacation: ../login.php');
}
?>
<?php
include('header.php');
?>
    
    <div class="admintitle">
    <h1 style="text-align: center;">Welcome to Admin Dashboard </h1>
    <h4 style="text-align: center;"><a href="../logout.php">Logout</a> </h4>

    </div>

<div>
    <center>
<table > 
    <tr>
        <td>1.</td> <td> <a href="addstudent.php">Insert Student Details   </a> </td>
    </tr>
    <tr>
        <td>2.</td> <td> <a href="updatestudent.php">update Student Details   </a> </td>
    </tr>
    <tr>
        <td>3.</td> <td> <a href="deletestudent.php">Delete Student Details   </a> </td>
    </tr>
</table>
</center>

</div>




</body>
</html>