<body bgcolor="#f0f0f0" text='#f45673'><h1 align='center'>Profiles</h1></body><?php 
$con=mysqli_connect("localhost","root","","crud");
    $confirm=mysqli_query($con,"select * from developers");
    echo"<table align=center border='3' cellpadding='35px'>";
while($row=mysqli_fetch_array($confirm))
{
    echo"<tr><td>".$row["ID"];
    echo"<td>".$row["First_name"];
    echo"<td>".$row["Last_name"];
    echo"<td>".$row["Email"];
    echo"<td>".$row["Phone_number"];
    echo"<td>".$row["Address"];
  
    echo"</tr>";
}
echo"</table>";

?>