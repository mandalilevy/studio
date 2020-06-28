<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>STILL ALIVE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel = "icon" href = "LOGO.jpg" type = "image/x-icon"> 
</head>
<body>
  <div class="container">
<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: blue">
  <div class="container">
 <div class="navbar-brand">
      <h3 style="float: left;">STILL ALIVE STUDIOS</h3>
        
        </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav navbar-nav ml-auto" style="color: black;font-family: Verdana;font-weight: bold">
        
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">UPDATE PASSWORD</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="admin.php" >LOG-OUT</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  </div>
    <div class="container">
  
</div>
  



  <center>
<div style="font-size: 25px;font-family:  Verdana, Geneva, Tahoma, sans-serif;text-transform: uppercase;color: blue">
<caption >ALL BOOKINGS</caption></div>
<div class="container">
  <table align="center" class="table table-bordered">

    <tr style="font-family: times new roman; color: blue;font-size: 16px;text-transform: uppercase;">
      <th scope="col">NAME</th>
      <th scope="col">CONTACTS</th>
      <th scope="col">MUSIC GENRE</th>
      <th scope="col">DATE OF SESSION</th>
      <th scope="col">SESSION</th>
    </tr>
    <?php 
$con=mysqli_connect("127.0.0.1","root","","studio");
$query=mysqli_query($con,"SELECT  `name`, `cont`, `genre`, `dt`, `sess` FROM `register` ORDER BY `dt`");
while ($row=mysqli_fetch_array($query)) {
  ?>
    <tr  style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: black">
      <td><?=$row['name'];?></td>
      <td><?=$row['cont'];?></td>
      <td><?=$row['genre'];?></td>
      <td><?=$row['dt'];?></td>
      <td><?=$row['sess'];?></td>
    
    </tr>
  <?php } ?>
  </table>
  </div>
  </center>
 
 <script src="jquery.js"></script>
    <script type="text/javascript">
       $('input[name="chkDelete"]').click(function () {
    $(this).closest('tr').removeClass('foo');
    if ($(this).is(':checked')) $(this).closest('tr').addClass('foo');
})
    </script>
    <style>
      .foo {
    background: aqua;
}
    </style>
























<form  enctype="multipart/form-data" method="POST" action="update.php">

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="na">Email Address</label>
          <input type="email" id="na" name="name"class="form-control validate" required="">
        </div>
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="cont">New Password</label>
        <input type="Password" id="cont" class="form-control validate" name="pasr" required="" maxlength="10">
        </div>  
        <div class="text-center mb-3">
          <input type="submit" name="add" id="btnsub"  class="btn blue-gradient btn-block btn-rounded z-depth-1a btn-warning" value="update" style="font-weight: bolder;">
        </div>
   
      </div>
      </div>
    </div>
  </div>
</div>

</form>


</body>
</html>