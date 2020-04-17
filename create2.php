
<?php 
$con=mysqli_connect("localhost","root","","crud");
$id=$_REQUEST["id"];
$first_name=$_REQUEST["f"];
$last_name=$_REQUEST["l"];
$email=$_REQUEST["e"];
$mobile=$_REQUEST["m"];
$address=$_REQUEST["a"];
//$img=$_FILES["p"]["name"];

$confirm=mysqli_query($con,"insert into developers values ($id,'$first_name','$last_name','$email',$mobile,'$address')");

if($confirm==1)
{
   // move_uploaded_file($_FILES["p"]["tmp_name"],images\      ''. $_FILES["p"]["name"]);
    header("location:signup.php");
}
else
{
    echo"Profile does not created ";
}
?>