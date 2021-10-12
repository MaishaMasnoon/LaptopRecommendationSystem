<?php

 function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","gadget");
	//echo $sql;
	$result = mysqli_query($conn, $sql);
	$arr=array();
	while($row = mysqli_fetch_assoc($result)){
		$arr[]=$row;
	}
	return json_encode($arr);
}

?>