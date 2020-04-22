<?php
$link = mysqli_connect("localhost", "root", "", "crud");
$id = $_POST["i"];
$fn = $_POST["f"];
$ln = $_POST["l"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$address = $_POST["a"];
$img=$_FILES["p"]["name"];

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql="UPDATE `developers` SET `First_name`='$fn',`Last_name`='$ln',`Email`='$email',`Phone_number`=$mobile,`Address`='$address',`Avatar`='$img' WHERE ID=$id";   

if(mysqli_query($link, $sql))
{
    move_uploaded_file($_FILES["p"]["tmp_name"],'avatar/'. $img);
    header("location:signup.php");
}

else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

?>
