
<?php

session_start();


	
$con=mysqli_connect("127.0.0.1","root","","studio");

$name=$_POST['pasr'];
$sql="UPDATE `login` SET `pass`='$name' WHERE email='".$_POST['name']."'";
if(mysqli_query($con, $sql)){

header("Location:main.php");
}













 ?>
