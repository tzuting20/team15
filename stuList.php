<?php
session_start();
require("dbconnect.php");
$sql = "select * from form;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
// $rs=mysqli_fetch_assoc($result);
// if (! $rs) {
// 	echo "no data found";
// 	exit(0);
// }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>學生申請表</title>
</head>

<body>

<p>學生申請表</p>
<hr />
<div><?php //echo $msg; ?></div><hr>
<!--<a href="todoRpt.php">工作報表</a> | <a href="todoAddForm.php">Add Task</a> <br>-->
<table width="200" border="1">
  <tr>
    <td>ID</td>
    <td>學生姓名</td>
    <td>學號</td>
	<td>父親姓名</td>
    <td>母親姓名</td>
	<td>申請補助種類</td>
	<td>狀態</td>
  </tr>
<?php
while ($rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>" , $rs['name'] ,  "</td>";
	echo "<td>" , $rs['stuID'] ,  "</td>";
	echo "<td>" , $rs['father'] , "</td>";
	echo "<td>" , $rs['mother'] , "</td>";
	echo "<td>" , $rs['tos'] , "</td>";
	echo "<td>" , $rs['status'] . "</td></tr>";
}
<a href ="FormAddForm.php">申請助學金</a>
?>
</table>
</body>
</html>
