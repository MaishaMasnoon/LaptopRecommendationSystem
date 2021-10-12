<!DOCTYPE html>

<html>
<head>
  <title> Registration </title>

  <style>
    header{
      padding: 20px;
      text-align: center;
     <!-- background-color: #2f7cc4; -->
      color: black;
      text-transform: uppercase;
      letter-spacing: 8px;
      font-family: impact;
      font-weight: lighter;
      font-size: 32px;
    }

    div {
      opacity: 0.8;
      border-radius: 4px;
      background-color: #2f7cc4;
      margin-top: 2%;
      margin-left: 30%;
      margin-right: 35%;
      padding: 20px;
      width: 600px;
      text-indent: 230px;
    }

    .container{
      opacity: 0.8;
      border-radius: 4px;
      background-color: #2f7cc4;
      margin-top: 2%;
      margin-left: 30%;
      margin-right: 35%;
      padding: 20px;
      width: 600px;
      text-align: center;
    }

    body{
      background-image: url("asset/laptop003.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    h1{
      font-family: impact;
      font-weight: lighter;
      text-transform: uppercase;
    }

    label{
      margin-top: 10px;
      margin-bottom: 10px;
      display: inline-block;
      float: left;
      clear: left;
      width: 250px;
      text-align: left;
      font-family: calibri;
      font-weight: lighter;
      text-transform: uppercase;
    }

    .btn{
      background-color: green;
      padding: 15px 32px;
      color: white;
      border: none;
      text-decoration: none;
      text-transform: uppercase;
      font-weight: 500;
      text-align: center;
      margin-left: 25%;
      margin-top: 50px;
    }

    .btn:hover{
      background-color: #00cc00;
    }

    input {
      border-radius: 0px;
      border: none;
      text-align: center;
      padding: 5px;
      margin-top: 10px;
      margin-left: -100px;
      margin-bottom: 10px;
      width: 300px;
      display: inline-block;
      float: left;
    }

    form{
      float:left;
    }

    a{
      text-decoration: none;
      color: black;
    }

    ul {
      opacity: 0.8;
      font-family: calibri;
      letter-spacing: 2px;
      text-align: center;
      list-style-type: none;
      margin-top: 180px;
      padding: 0;
      width: 12%;
      background-color: #2f7cc4;
      position: fixed;
      height: 47%;
      border-radius: 4px 4px;
      overflow: auto;
    }

    li a{
      display: block;
      color: black;
      background-color:  #ffcc99;
      padding: 10px 16px;
      text-decoration: none;
      text-transform: uppercase;
    }

    li a.active{
      background-color: green;
      color: white;
    }

    li a.active:hover{
      background-color: #00cc00;
    }

    li a:hover:not(.active){
      background-color: #cc7a00;
    }

    footer{
      text-align: center;
      position: fixed;
      left: 45%;
      bottom: 0%;
    }

  </style>

</head>

<body>

  <header><a href = "index.php"> OneStop Laptop Solution </a></header>

  <ul>
    <li style="margin-top: 80px;"><a href="index.php">login</a></li>
    <li><a class = "active" href="reg.php">registration</a></li>
    <li><a href="con.php">contact</a></li>
    <li><a href="abt.php">about us</a></li>
  </ul>

  <div>
    <h1> Welcome! </h1>
  </div>
    <form class="container" action = "<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
      <label>First Name </label>
      <input type="text" name = "fn" placeholder="First Name" required/>
      <label>last Name </label>
      <input type="text" name = "ln" placeholder="Last Name" required/>
      <label>Email </label>
      <input type="email" name = "mail" placeholder="ex: someone@domain.com" />
      <label>phone </label>
      <input type="text" name = "m" placeholder="ex: 01710XXXXXX" required/>
      <!--<label>National ID </label>
      <input type = "text" name = "nid" placeholder="NID" required/>-->
      <label>user name</label>
      <input type="text" name = "u" placeholder="User Name" required/>
      <label>password</label>
      <input type="password" name = "p" placeholder="password" required/>
	  <label>confirm password</label>
      <input type="password" name = "p1" placeholder="password" required/>
      <input class = "btn" style = "width: 165px; margin-left: 215px" type = "submit" value = "Register">

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
		//echo "Connected successfully";
		
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
		  $pass1 = purify($_POST['p1']);
          //$id = purify($_POST['nid']);
		  
		  
		  $sql1 = "SELECT * FROM registration where user_name = '$usr'";
$result = mysqli_query($conn, $sql1);

if ($result && mysqli_num_rows($result) > 0 && $pass1==$pass) {
    // output data of each row
    
        
		echo "This Username is already taken.";
		
    
} else if($result && mysqli_num_rows($result) > 0 && $pass1!=$pass){
    echo "Problem with both password and username,give another one.";
}
else if( mysqli_num_rows($result) == 0 && $pass1!=$pass){
	echo"Password did not match";
}
		  
		  
		  //if($pass1==$pass)
		  else{
		  $sql = "INSERT INTO registration (first_name, last_name, email, phone, user_name, password)
			VALUES ('".$fname."', '".$lname."', '".$email."', '".$mobile."', '".$usr."', '".$pass."')";
			
			
			if (mysqli_query($conn, $sql)) {
				//echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			
			
			mysqli_close($conn);
			
		}
		
	   }

          
        ?>
    </form>

<footer style = "font-family:calibri; letter-spacing:2px; background: orange; text-transform: uppercase;"> Copyright &copy 2018 </footer>
</body>

</html>
