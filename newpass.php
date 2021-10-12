<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <title> Welcome! </title>

  <style>
    .btn{
      background-color: green;
      padding: 15px 32px;
      color: white;
      border: none;
      text-decoration: none;
      text-align: center;
      width: 165px;
    }

    .btn:hover{
      background-color: #00cc00;
    }

    input[type = text], select{
      border-radius: 0px;
      border: 1px solid #6600cc;
      text-align: center;
      padding: 10px;
      margin-top: 40px;
      margin-bottom: 40px;
    }

    input[type = password], select{
      border-radius: 0px;
      border: 1px solid #6600cc;
      text-align: center;
      padding: 10px;
      margin-top: 40px;
    }

    .a1{
      text-decoration: none;
      color: black;
    }
    a:hover{
      background-color: #2f7cc4;
    }

    ul {
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
      background-color:  #2f7cc4;
      padding: 5px 16px;
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

    div {
      opacity: 0.8;
      border-radius: 4px;
      background-color: #2f7cc4;
      margin-top: 5%;
      margin-left: 33%;
      margin-right: 35%;
      padding: 40px;
    }

    header{
      padding: 20px;
      text-align: center;
      background-color: #2f7cc4;
      color: black;
      text-transform: uppercase;
      letter-spacing: 8px;
      font-family: impact;
      font-weight: lighter;
      font-size: 32px;
    }

    body {
      background-image: url("asset/laptop003.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    label {
      letter-spacing: 2px;
      text-transform: uppercase;
      border: 2px solid;
      padding: 10px;
      border-color: #6600cc;
      font-family: calibri;
      font-weight: lighter;
      color: black;
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

<header><a class="a1" href = "index.php"> OneStop laptop Solution </a></header>

<ul>
  <li style="margin-top: 130px;"><a href="index.php">login</a></li>
    <li><a href="reg.php">registration</a></li>
    <li><a href="con.php">contact</a></li>
    <li><a href="abt.php">about us</a></li>
  <li><a class = "active" href="newpass.php">Create new password</a></li>
</ul>

<div>
<center><form action="newpass.php" method = "post">
  <label><b>User Name</b> </label><br>
  <input type = "text" name = "usr1" placeholder="User Name" required/><br/>
  <label><b>Current Password</b></label><br>
  <input type="password" name="pass1" placeholder="Password" required/><br><br>
  <label><b>New Password</b></label><br>
  <input type="password" name="pass2" placeholder="Password" required/><br><br>
  <input class = "btn" type = "submit"  value = "newpassword"/>
</form></center>

<br><center><a href = "reg.php"> Create New Account </a></center>
</div>

<footer style = "font-family:calibri; letter-spacing:2px; background: orange; text-transform: uppercase;"> Copyright &copy 2018 </footer>
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

/*$sql = "SELECT user_name,password FROM registration";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "username: " . $row["user_name"]. " - Password: " . $row["password"]. "<br>";
		if($userName==$row["user_name"] && $pas==$row["password"]){
			echo "login successfull";
		}
    }
} else {
    echo "0 results";
}

mysqli_close($conn);*/





    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      function purify($data)
      {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
      }

      $usrName1 = purify($_POST['usr1']);
      $pas1 = purify($_POST['pass1']);
	  $pas2 = purify($_POST['pass2']);
	  
	  
	  
	  
	  
			  $sql = "SELECT user_name,password FROM registration";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			
			
			
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//echo "username: " . $row["user_name"]. " - Password: " . $row["password"]. "<br>";
				if($usrName1==$row["user_name"] && $pas1==$row["password"])
				{
					echo "matches<br>";
					//header("location:home.php");
					$sql1="UPDATE registration SET password='$pas2' WHERE user_name='$usrName1' ";
					mysqli_query($conn,$sql1);
				}
				else if($usrName1!=$row["user_name"] && $pas1==$row["password"]){
					echo "Correct Username is required.<br>";
					

					
					
				}
				else if($usrName1==$row["user_name"] && $pas1!=$row["password"]){
					
					echo "Correct Password is required.<br>";
				}
				
			}
			echo "Create an Account to Login.";
		} 
		else {
			echo "0 results";
		}
		

		mysqli_close($conn);
	  
	  
	  
	  
	  
	  
	  
	  

      /*$file = fopen('userDetails.txt', 'r');

      $flag = false;
    	while(!feof($file))
    	{
    		$dat = explode('|',fgets($file));

    		if(!empty($dat[4]))
    		{
    			if(trim($dat[4]) == $usrName)
    			{
    				$flag = true;
    				if(trim($dat[5]) == $pas)
    				{
              $_SESSION['usr'] = $usrName;
    					echo "<center>Welcome <b>$usrName</b>!<br> Logged in!</center>";
              header("location:home.php");
    					break;

    				}
    				else
    				{
    					echo "<center>Password doesn't match!<br><center>";
    					break;
    				}
    			}
    		}

    	}

    	if(!$flag)
    	{
    		echo "<div><center><p>User <b>$usrName</b> not found</p></center></div>";
    	}*/
    }

 ?>
