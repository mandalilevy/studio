
<?php
$con=mysqli_connect("127.0.0.1","root","","studio");

$name=$_POST['name'];
$phone=$_POST['cont'];
$gen=$_POST['cat'];
$date=$_POST['date'];
$sess=$_POST['ses'];

$query ="SELECT * FROM `register` WHERE dt='".$_POST['date']."' AND sess='".$_POST['ses']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	echo "<script type='text/javascript'>alert('SESSION HAS ALREADY BEEN BOOKED\nPlease Select Anoter Date or Time');</script>";
	header("Location:index.php");
}
else{
$sql="INSERT INTO `register`(`name`, `cont`, `genre`, `dt`, `sess`)VALUES('$name','$phone','$gen','$date','$sess')";

if(mysqli_query($con, $sql)){
echo "Location:index.php";
}

}









 ?>