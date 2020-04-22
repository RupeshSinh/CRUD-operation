<body bgcolor="#f0f0f0" text='#f45673'>
    <h1 align='center'>Profiles</h1>
</body>
<?php 
$con=mysqli_connect("localhost","root","","crud");
$confirm=mysqli_query($con,"select * from developers");
    echo"<table align=center border='3' cellpadding='35px'>";
    echo"<tr><td>ID</td>";
    echo"<td>First Name</td>";  
    echo"<td>Last Name</td>";
    echo"<td>Email</td>";
    echo"<td>Phone Number</td>";
    echo"<td>Address</td>";
    echo"<td>Avatar</td></tr>";
    
while($row=mysqli_fetch_array($confirm))
{
    
    echo"<tr>";
    echo"<td>".$row["ID"]; 
    echo"<td>".$row["First_name"]; 
    echo"<td>".$row["Last_name"]; 
    echo"<td>".$row["Email"]; 
    echo"<td>".$row["Phone_number"]; 
    echo"<td>".$row["Address"]; 
    echo"<td><img src='avatar/".$row['Avatar']."'               height='100px' width='100px'></td>
    </tr>";

    }
echo"</table>";

?>