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
<body>

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

<div class="jumbotron">
<div class="container">
<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3"></div>
<div class="col-sm-6 col-md-6 col-lg-6">
<h1>Welcome</h1>
<p>Add New Products to the Database</p>

<form action = "<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">

	<div class="form-group row">
    <label for="BrandName" class="col-sm-3 col-form-label">Brand Name</label>
    <div class="col-sm-9">
      <input type="text" name="bn" class="form-control" id="BrandName" placeholder="Please Enter Brand Name" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="ModelNo" class="col-sm-3 col-form-label">Model:</label>
    <div class="col-sm-9">
      <input type="text" name="mn" class="form-control" id="ModelNo" placeholder="Please Enter Model Number" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="RAM" class="col-sm-3 col-form-label">RAM:</label>
    <div class="col-sm-9">
      <input type="text" name="ram" class="form-control" id="Ram" placeholder="Please Enter RAM " required>
    </div>
  </div>
  <div class="form-group row">
    <label for="storage" class="col-sm-3 col-form-label">Storage:</label>
    <div class="col-sm-9">
      <input type="text" name="store" class="form-control" id="storage" placeholder="Enter Hard Disk Space" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="Price" class="col-sm-3 col-form-label">Price:</label>
    <div class="col-sm-9">
      <input type="text"  name="price" class="form-control" id="price" placeholder="Enter The Price Of The product" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="Quantity" class="col-sm-3 col-form-label">Quantity:</label>
    <div class="col-sm-9">
      <input type="text" name="Quan" class="form-control" id="quantity" placeholder="Quantity" required>
    </div>
  </div>
  
  <input class = "btn-primary" style = "width: 165px; margin-left: 215px" type = "submit" value = "SUBMIT">
</form>
  

</div>
<div class="col-sm-3 col-md-3 col-lg-3"></div>
</div>
</div>
</div>

	<script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>


      <?php
	  
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "gadget";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";
		
		function purify($data)
          {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
          }
		

		if($_SERVER['REQUEST_METHOD'] == 'POST'){ 

          $fname = purify($_POST['fn']);
          $lname = purify($_POST['ln']);
          $email = purify($_POST['mail']);
          $mobile = purify($_POST['m']);
          $usr = purify($_POST['u']);
          $pass = purify($_POST['p']);
          //$id = purify($_POST['nid']);
		  
		  $sql = "INSERT INTO registration (first_name, last_name, email, phone, user_name, password)
			VALUES ('".$fname."', '".$lname."', '".$email."', '".$mobile."', '".$usr."', '".$pass."')";

			if (mysqli_query($conn, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
	   }

           /*$uData = $fname."|".$lname."|".$email."|".$mobile."|".$usr."|".$pass."|".$id."\n";

          $file = fopen('userDetails.txt', 'a+');

          $exists = false;

          while(!feof($file))
          {
              $dat = fgets($file);

              $dat = explode('|', $dat);

              if(!empty($dat[4]))
          	  {
          		  if(trim($dat[4]) == trim($_POST['u']))
          		  {
            			$exist = true;
            			echo "<p style = 'margin-top: 450px;text-transform: uppercase; color:red'><b> User Already Exists! </b></p><br>";
            			break;
          		  }
          	  }
          }

          if(!$exists){
            if(fwrite($file, $uData))
            {
              echo "<p style = 'margin-top: 450px;text-transform: uppercase; color:green;'><b> Registration Successfull!</b></p><br>";
            }
            else
            {
              echo "<p style = 'margin-top: 450px;text-transform: uppercase; color:red'><b> Try Again! </b></p><br>";
            }
          }

        }*/

        ?>
