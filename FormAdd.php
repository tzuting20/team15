<?php
require("dbconnect.php");
$name=mysqli_real_escape_string($conn,$_POST['name']);
$stuID=mysqli_real_escape_string($conn,$_POST['stuID']);
$father=mysqli_real_escape_string($conn,$_POST['father']);
$mother=mysqli_real_escape_string($conn,$_POST['mother']);
$status=mysqli_real_escape_string($conn,$_POST['status']);

if ($title) { //if title is not empty
	$sql = "insert into form (name, stuID, father,mother, status) values ('$name','$stuID','$father','$mother',0);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Data added";
} else {
	echo "The Form cannot be empty";
}

?>
<a href="stuList.php">Back</a>