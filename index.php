<html>
<body>
<table border="2">
<tr>
<th>ID</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>EMAIL</th>
<th>PHONE NUMBER</th>
<th>PASSWORD</th>
<th>DELETE</th>
<th>UPDATE</th>
</tr>
<?php
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



// select query start



$sql = "SELECT * FROM user_table";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
		?>
	<tr>
	<td>	<?php echo  $row["id"];?> </td>
	<td>	<?php echo  $row["Fast_Name"];?>  </td>
	<td>	<?php echo  $row["Last_Name"];?>  </td>
	<td>	<?php echo  $row["Email_Address"];?>  </td>
	<td>    <?php echo  $row["Phone"];?>  </td>
	<td>	<?php echo  $row["Password"];?>  </td>
	
	<?php
	/*       
	<td><a href="del1.php?id="></a><?php echo $row["id"];?> Delete</td>
	
	*/
	?>
	
	<td><a href="del1.php?id=<?php echo  $row["id"];?>">Delete</a></td> 
	  <td> <a href="edit1.php?id=<?php echo  $row["id"];?>">Update</a></td> 

	  </tr>
	<?php
	
	
	
	
	}
	

	
}


?> 
 </table>
 </body>
 </html>
 <br>
<br>



<form action="first.php">
<input type="submit" value ="home"></input>
</form>


	
