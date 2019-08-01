<?php


$id = $_GET['id'];


?>


<html>
<head>
</head>
<body>

<form action="" method='POST'>
First Name
<br>
<input type="text" name = fname >
</input>
<br>
Last Name
<br>
<input type="text" name = lname >
</input>
<br>
Email Address
<br>
<input type="text" name = email address >
</input>
<br>
Phone Number
<br>
<input type="text" name = phone >
</input>
<br>
Password

<br>
<input type="password" name = pass >
</input>


<br>
<input type="submit" name = submit >
</input>

</form>

</body>
</html>


<?php

if(isset($_POST['submit'])) {
$name =$_POST['First_Name'];
$lname =$_POST['Last_Name'];
$email =$_POST['Email_Address'];
$phone =$_POST['Phone'];
$password =$_POST['Password'];



$servername="localhost";
$username="root";
$password1="";

$conn=mysqli_connect($servername,$username,$password1,'my_db');


$query="UPDATE `user_table` SET ,`Fast_Name`=$name,`Last_Name`='$lname',`Email_Address`='$email',`Phone`='$phone',`Password`='$password' WHERE 'id'= '$id'";

$update = mysqli_query($conn,$query);
if(!$update)
{
	
	echo "not update";
	
}

else{
	
	
	header("location:index.php");
}





}



?>