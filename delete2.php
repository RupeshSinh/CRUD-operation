<?php 
/*if(!isset($_REQUEST["s"]))
          die;*/
$con=mysqli_connect("localhost","root","","crud");
    $id=$_REQUEST["i"];
    $confirm=mysqli_query($con,"delete from developers where id =$id");
if($confirm==1)
{
    header("location:signup.php");   
}
else
{
    echo"Profile Not Deleted";
}
?>
