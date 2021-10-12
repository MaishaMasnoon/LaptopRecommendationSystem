

<?php
    include('loadConfig.php')
 ?>

 <script>

    function load(){
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"><?php $result[0]["model"] ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                Modal body.. <p >HAHAHAHAHAHAH </p>
                <?php $result[0]["ram"] ?>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
    }
 </script>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>OneStop Laptop Solution</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body style="padding-top: 0px;">



<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">

  <!-- Links -->
   <div class="row">
  <ul class="navbar-nav">
   <div class="col-sm-6 col-md-3 col-lg-3">
	<li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
	</div>
	<div class="col-sm-6 col-md-3 col-lg-3">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Login</a>
    </li>
	</div>
	<div class="col-sm-6 col-md-3 col-lg-3">
    <li class="nav-item">
      <a class="nav-link" href="#">Profile</a>
    </li>
	</div>
	<div class="col-sm-6 col-md-3 col-lg-3">
	<li class="nav-item">
      <a class="nav-link" href="#">Wishlist</a>
    </li>
	</div>
	
  </ul>
</div>
<div class="form">
 <form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
	
    
	
  </form>
  </div>
  
  
</nav>


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="asset/laptop001.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>Welcome To One Stop Solution</h3>
    <p>This is our initiative to make your life easier</p>
  </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/laptop002.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>Wanna buy a laptop?</h3>
    <p>Try and see what our AI have for you</p>
    </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/laptop003.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>We Provide the best solution</h3>
    <p>To buy the best possible laptop within your budget</p>
  </div>

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
        <div class="jumbotron-fluid">
        <div class="container-fluid">
        <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/Inspiron14.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="load()" style="margin-left: 150px;">
                    Click for Details
            </button>

            <!-- The Modal -->
<!-- <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-header">
        <h4 class="modal-title"><?php //$result[0]["model"] ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>


      <div class="modal-body">
        Modal body.. <p >HAHAHAHAHAHAH </p>
        <?php //$result[0]["ram"] ?>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> -->

        </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/inspiron15.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" style="margin-left: 150px;">
                    Click for Details
            </button>

                <!-- The Modal -->
<div class="modal fade" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body.. <p>two more</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
        </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/Inspiron343.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="margin-left: 150px;">
                    Click for Details
            </button>

                <!-- The Modal -->
<div class="modal fade" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php $result[0]["model"] ?></h4>
          <p> one laptop up for grab</p>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p> <?php $result[0]["ram"] ?> </p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

        </div>
        </div>
            <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/Asus.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" style="margin-left: 150px;">
                    Click for Details
            </button>


<!-- The Modal -->
<div class="modal fade" id="myModal4">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

        </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/Asus_prem.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5" style="margin-left: 150px;">
                    Click for Details
            </button>


<!-- The Modal -->
<div class="modal fade" id="myModal5">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

        </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/Asus_Pro.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6" style="margin-left: 150px;">
                    Click for Details
            </button>


<!-- The Modal -->
<div class="modal fade" id="myModal6">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

        </div>
        </div>
            <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/lenovo.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal7" style="margin-left: 150px;">
                    Click for Details
            </button>


<!-- The Modal -->
<div class="modal fade" id="myModal7">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

        </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/Lenovo_Thinkpad.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal8" style="margin-left: 150px;">
                    Click for Details
            </button>


<!-- The Modal -->
<div class="modal fade" id="myModal8">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

        </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <img src="asset/Lenovo_Yoga.jpg" class="img-fluid" alt="Responsive image" height="770" width="550">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal9" style="margin-left: 150px;">
                    Click for Details
            </button>


<!-- The Modal -->
<div class="modal fade" id="myModal9">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

        </div>
        </div>
        </div>
    </div>

    <footer style = "font-family:calibri; letter-spacing:2px; background: blue; text-transform: uppercase;"> <?php
        $result = getTableData( 'configuration', 'id<11');
        //$datas = load();
        $jsn=json_decode($result);
        //$data = $result[0];
        echo "<p style=\"color:red;\">".$jsn[0]->model." ".$jsn[0]->ram."</p>";
    ?> </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
