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
<center>
<table>
<form action="updatestudent.php" method="post">
<tr>
    <th>Enter Standerd</th>
<td><input type="number" name="standerd" placeholder="Enter Standerd" required="required"/> </td>
</tr>
<tr>
    <th>Enter Student Name</th>
<td><input type="text" name="stuname" placeholder="Enter Student Name" required="required"/></td>
<td colspan="2"><input type="submit"name="submit" value="Search"/> </td>
</tr>


</form>
</table>
</center>
<table>
<tr>
<th>No </th>
<th>Name</th>
<th>Rollno </th>
<th>Edit </th>
</tr>




<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $standerd = $_POST['standerd'];
    $name = $_POST['stuname'];

$sql="SELECT * FROM `student` WHERE `standerd`='$standerd'";
$run=mysqli_query($con,$sql);

if(mysqli_num_rows($run)<1)
{
   
    echo  "<tr><td colspan='5'>No Records Found</td></tr>";
}
else{
    $count=0;
    while($data=mysqli_fetch_array($run))
{
    $count++;
    ?>
    <tr>
        <td><?php echo $count; ?> </td>
    
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['rollno']; ?></td>
        <td><a href="updateform.php?sid=<?php echo $data['id']; ?>"> Edit</a> </td>
        </tr>

    <?php
}



}



}
?>
</table>