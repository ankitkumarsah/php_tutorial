<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
  
<h3 style="text-align: right; margin-right: 20px;"><a href="login.php"> Admin Login</a></h3>
<h1 style="text-align: center;">Welcome to Student Management System </h1>

<form method="post" action="index.php">

<center>
<table style="width: 50%;">
<tr> 
<td colspan="2">Student Information </td>
</tr>

<tr>
    <td style="text-align: right;">Choose Standard </td>
     <td>
         <select name="std" required >
             <option value="1"> 1st</option>
             <option value="2"> 2nd</option>
             <option value="3"> 3th</option>
             <option value="4"> 4th</option>
             <option value="5"> 5th</option>
             <option value="6"> 6th</option>
             
         </select>
     </td>
</tr>

<tr> 
    <td style="text-align: right;">Enter Rollno </td>
     <td>
         <input type="text" name="rollno" required >
     </td>
</tr>
<tr>
    <td colspan="2"><input type="submit" style="text-align: left;" name="submit" value="Show info"> </td>
</tr>


</table>
</center>

</form>


</body>
</html>