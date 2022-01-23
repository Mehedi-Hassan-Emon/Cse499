<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`,`Username`, `Email`, `Password`) VALUES ( '0','$Username', '$Email', '$Password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>