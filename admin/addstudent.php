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
include('title.php');
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
    <center>
    <table>
<tr> 
<th>Roll No</th>
<td> <input type="text" name="rollno" placeholder="Enter Rollno" required> </td>
</tr>
<tr> 
    <th>Full Name</th>
    <td> <input type="text" name="name" placeholder="Enter name" required></td>
    </tr>
    <tr> 
        <th>City</th>
        <td><input type="text" name="city" placeholder="Enter city" required></td>
        </tr>
        <tr> 
            <th>Parents Contact no</th>
            <td><input type="text" name="pcon" placeholder="Enter pcon" required></td>
            </tr>
            <tr> 
                <th>Standerd</th>
                <td><input type="number" name="std" placeholder="Enter standerd" required></td>
                </tr>
            <tr> 
                <th>Image</th>
                <td><input type="file" name="simg"  required></td>
                </tr>

<tr> 
    <td colspan="2"> <input type ="submit" name="submit" value="Submit"></td></tr>


</table>

</center>


</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{

include('../dbcon.php');
$rollno = $_POST['rollno'];
$name = $_POST['name'];
$city = $_POST['city'];
$pcon = $_POST['pcon'];
$std = $_POST['std'];
$qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`) VALUES ('$rollno','$name','$city','$pcon','$std')";

$run= mysqli_query($con,$qry);

if($run == true)
{
    ?>
    <script>
        alert('Data Inserted Successfully.')

    </script>
<?php



}

}


?>