<?php

    $con=mysqli_connect("127.0.0.1","root","","studio");
    $name=$_POST['name'];
    $pass=$_POST['pasr'];

      $sql="INSERT INTO `login`(`email`, `pass`)VALUES('$name','$pass')";
          if(mysqli_query($con, $sql)){
         header("Location:admin.php");
    }
   

 ?>