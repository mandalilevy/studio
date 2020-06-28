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
          <a class="nav-link "data-toggle="modal" data-target="#elegantModalForm"name="book" style="cursor: pointer;">SIGN UP <i class="fa fa-user-plus" aria-hidden="true"></i>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">LOGIN <i class="fa fa-sign-in" aria-hidden="true"></i></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  </div>
    <div class="container">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 200vh;height:85vh" src="images/a.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img style="width: 200vh;height:85vh" src="images/b.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="width: 200vh;height:85vh" src="images/c.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  <form  enctype="multipart/form-data" method="POST" action="reg.php">
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content form-elegant">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>REGISTER</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="na">Email Address</label>
          <input type="email" id="na" name="name"class="form-control validate" required="">
        </div>
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="cont">Password</label>
        <input type="Password" id="cont" class="form-control validate" name="pasr" required="" maxlength="10">
        </div>
         
         
        
       
        <div class="text-center mb-3">
          <input type="submit" name="add" id="btnsub"  class="btn blue-gradient btn-block btn-rounded z-depth-1a btn-primary" value="Submit">
        </div>
   
      </div>

      
    </div>

  </div>
</div>
<h5 class="text-center text-success" id="rss"></h5>
    </form> 
<form  enctype="multipart/form-data" method="POST" action="ad.php">

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
           <label data-error="wrong" data-success="right" for="cont">Password</label>
        <input type="Password" id="cont" class="form-control validate" name="pasr" required="" maxlength="10">
        </div>  
        <div class="text-center mb-3">
          <input type="submit" name="add" id="btnsub"  class="btn blue-gradient btn-block btn-rounded z-depth-1a btn-primary" value="Submit">
        </div>
   
      </div>
      </div>
    </div>
  </div>
</div>

</form>


</body>
</html>