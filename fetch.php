<?php

	include('fetch2.php');
    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gadget";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT model, ram, price FROM configuration where id<21";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["model"]. " - Name: " . $row["ram"]. " " . $row["price"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();*/

   /* function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","gadget");
	//echo $sql;
	$result = mysqli_query($conn, $sql);
	$arr=array();
	while($row = mysqli_fetch_assoc($result)){
		$arr[]=$row;
	}
	return json_encode($arr);
}*/
$jsonData= getJSONFromDB("SELECT model, ram, price FROM configuration where id<40");
$jsn=json_decode($jsonData);
echo sizeof($jsn);

for($i=0;$i<sizeof($jsn);$i++){
	 echo $jsn[$i]->model." ".$jsn[$i]->ram."<br>";
	 }

     // for ($x in $jsn) {
     //     $x.model;
     //   }

 ?>
