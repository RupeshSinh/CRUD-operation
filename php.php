<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "crud");
$id = $_POST["i"];
$fn = $_POST["f"];
$ln = $_POST["l"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$address = $_POST["a"];

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt update query execution
$sql = "UPDATE developers SET First_name = '$fn', Last_name = '$ln', Email = '$email', Phone_number = $mobile, Address = '$address' WHERE ID = $id ";
if(mysqli_query($link, $sql)){
    header("location:signup.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
