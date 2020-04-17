<html>
<body bgcolor="#f0f0f0" text='#f45673'>
    <font size='+6'><h1 align='center'>Welcome</h1></font>
<table align='center' border='5' cellpadding="30px">
    <tr><td><h3 align='center'><a href='create.php'>Create</a></h3>
    <td><h3 align='center'><a href='retrieve.php'>Read</a></h3>
    <td><h3 align='center'><a href='update.php'>Update</a></h3>
    <td><h3 align='center'><a href='delete.php'>Delete</a></h3></tr>
<?php 
$con=mysqli_connect("localhost","root","","crud");
    $confirm=mysqli_query($con,"select * from developers");
    echo"<table align=center border='3' cellpadding='30px'>";
while($row=mysqli_fetch_array($confirm))
{
    echo"<tr><td>".$row["ID"];
    echo"<td>".$row["First_name"];
    echo"<td>".$row["Last_name"];
    echo"<td>".$row["Email"];
    echo"<td>".$row["Phone_number"];
    echo"<td>".$row["Address"];
    //echo"<td><img src=images/".$row["image"].">";
    echo"<td><a href=delete2.php?i=".$row["ID"].">Delete</a>";
    echo"<td><a href=update2.php?i=".$row["ID"].">Update</a>";
    echo"</tr></b>";
    
}
echo"</table>";

?>