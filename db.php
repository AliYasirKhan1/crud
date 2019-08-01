<html>
<head>
</head>
<body>

<form action="" method='POST'>
First Name
<br>
<input type="text" name = "fname" >
</input>
<br>
Last Name
<br>
<input type="text" name = "lname" >
</input>
<br>
Email Address
<br>
<input type="text" name = "email_address" >
</input>
<br>
Phone Number
<br>
<input type="text" name = "phone" >
</input>
<br>
Password

<br>
<input type="password" name = "pass" >
</input>


<br>
<input type="submit" name = "submit" >
</input>

</form>

</body>
</html>







<?php

if(isset($_POST['submit'])) {
	
	$name=''; $lname='' ;$email=''; $phone=0; $password='';
	
	
	if(isset($_POST['fname']) && ($_POST['fname']) !=''){
		
		$name=$_POST['fname'];
		
		
	}
	else{
		
		$error[]='First_name is missing';
		
	}


	
	
	if(isset($_POST['lname']) && ($_POST['lname']) !=''){
		
		$lname=$_POST['lname'];
		
	}
	else{
		
		$error[]='Last_name is missing';
		
	}

	


if(isset($_POST['email_address']) && ($_POST['email_address']) !=''){
		
		$email=$_POST['email_address'];
		
	}
	else{
		
		$error[]='email is missing';
		
	}

	
	if(isset($_POST['phone']) && ($_POST['phone']) !=''){
		
		$phone=$_POST['phone'];
		
	}
	else{
		
		$error[]='phone number  is missing';
		
	}

	if(isset($_POST['pass']) && ($_POST['pass']) !=''){
		
		$password=$_POST['pass'];
		
		
	}
	else{
		
		$error[]='password   is missing';
		
	}
	
	
		if(isset($error) && count($error) >0 )
{
// we will see
foreach ($error as $value) {
	# code...
	echo $value;
	echo '<br>';


}}




// database connection

$servername="localhost";
$username="root";
$password1="";

$conn=mysqli_connect($servername,$username,$password1,'my_db');
if (!$conn) {
    echo "not connected with database";
}
else{
	echo "";
}

$Fast_Name =$_POST['First_Name'];
$Last_Name =$_POST['Last_Name'];
$Email_Address =$_POST['Email_Address'];
$Phone =$_POST['Phone'];
$password =$_POST['Password'];


$query="INSERT INTO user_table( `Fast_Name, `Last_Name`,  `Email_Address`, `Phone`, `Password`) VALUES ('$name','$lname','$email','$phone','$password')";

$insert=mysqli_query($conn,$query);
if(!$insert)
{
	
	
	echo "data not inserted";
	
}
else{
	
     	header("location:index.php");
	
}

}
	?>