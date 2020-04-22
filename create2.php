<?php 
$con=mysqli_connect("localhost","root","","crud");
$id=$_REQUEST["id"];
$first_name=$_REQUEST["f"];
$last_name=$_REQUEST["l"];
$email=$_REQUEST["e"];
$mobile=$_REQUEST["m"];
$address=$_REQUEST["a"];
$img=$_FILES["p"]["name"];


$sql="INSERT INTO `developers`(`ID`, `First_name`, `Last_name`, `Email`, `Phone_number`, `Address`, `Avatar`) VALUES ($id,'$first_name','$last_name','$email','$mobile','$address','$img')";  
$confirm=mysqli_query($con,$sql);

if($confirm==1)
{
    move_uploaded_file($_FILES["p"]["tmp_name"],'avatar/ '.$img);
    header("location:signup.php");
}
else
{
    echo"Profile does not created ";
}
?>