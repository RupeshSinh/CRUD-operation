<?php
$con=mysqli_connect("localhost","root","","crud");
    $id=$_REQUEST["i"];
    $confirm=mysqli_query($con,"select * from Developers where id =$id");
if(mysqli_num_rows($confirm)==1)
{
    $ar=mysqli_fetch_array($confirm);
}
else
{
       return;
}
?>
<body bgcolor='#f0f0f0' text='#f45673'>
<h1 align='center'>*-*-*-Update profile *-*-*</h1>
<table align='center'  border='3'>
<form method="post" action="php.php" enctype="multipart/form-data">
    <tr>
        <td>Enter Your Developer Id
        <td><input type="text" name="i" placeholder="Developer id" value="<?php echo $ar["ID"]?>" ></td>
    </tr>
    <tr>
        <td>Enter Your First name
        <td><input type="text" name="f" placeholder="First name" value="<?php echo $ar["First_name"]?>" required></td>
    </tr>
    <tr>
        <td>Enter Your Last name
        <td><input type="text" name="l" placeholder="Last name" value="<?php echo $ar["Last_name"]?>" required></td>
    </tr>
    <tr>
        <td>Enter Your Email Id
        <td><input type="text" name="e" placeholder="Email" value="<?php echo $ar["Email"]?>" required></td>
    </tr>
    <tr>
        <td>Enter Your Phone no.
        <td><input type="text" maxlength="10" name="m"  placeholder="Mobile number" value="<?php echo $ar["Phone_number"]?>" required></td>
    </tr>
    <tr>
        <td>Enter Your Address
        <td><textarea rows="5" cols="20" name="a" placeholder="Address" value="<?php echo $ar["Address"]?>" required></textarea></td>
    </tr>
    <tr>
        <td>Select Profile Picture 
        <td><input type="file" name="p" value="<?php echo $ar["Avatar"]?> "></td>
    </tr>
    <tr>
        <td><input type="submit" name="c" value="Create"></td>
        <td><input type="submit" name="r" value="Reset"></td>
    </tr>
    </form>
    </table> 
</body>