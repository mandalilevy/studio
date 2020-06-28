<?php

    $con=mysqli_connect("127.0.0.1","root","","studio");
$query ="SELECT * FROM `login` WHERE email='".$_POST['name']."' AND pass='".$_POST['pasr']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {

		header("Location:main.php");
}
 else{
 	echo "<script type='text/javascript'>alert('USERNAME AND PASSWORD DO NOT MATCH!!');</script>";
 
 } 

 ?>