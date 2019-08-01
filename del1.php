<?php

$servername="localhost";
$username="root";
$password1="";

$conn=mysqli_connect($servername,$username,$password1,'my_db');


$id = $_GET['id'];


$query="DELETE FROM `user_table` WHERE 'id' = $id";
$del = mysqli_query($conn,$query);

if(!$del){
	
	echo "data not deleted";
}

else{
	
	
	
	header("location:db.php");
	

	
	
}







?>


