<?php
$connect = new mysqli("localhost","root","","internship");

$sql="SELECT f_name,sur_name,age,gender FROM intern";
$query=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($query)){
	$first_name=$row["f_name"];
	$last_name=$row["sur_name"];
	$age=$row["age"];
	$gender=$row["gender"];
	echo "My name is ".$first_name." ".$last_name." "."and I am"." ".$age." "."years old". "<br>";
}

?>