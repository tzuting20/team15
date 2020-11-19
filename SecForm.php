<?php
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>秘書</title>
</head>

<body>

<p>秘書待審核申請表</p>
<hr />
<!-- <table width="200" border="1">
  <tr>
    <td>id</td>
    <td>status</td>
  </tr> -->

<?php
// while (	$rs=mysqli_fetch_assoc($result)) {
//     echo "<tr><td>" . $rs['id'] . "</td>";
//     echo "<td>{$rs['status']}</td>";
// }
?>

<!-- 顯示學生申請表 -->
<form>
審核結果：<br>
<input type="checkbox" value="money" name="result">准予補助
    <select name="money">
    <option value="money">5000</option>
    <option value="money">10000</option>
    <option value="money">15000</option>
    <option value="money">20000</option>
    元<br>
<input type="checkbox" value="false" name="result">未符合補助條件<br>
審查意見: <input type="text" name="opinion"/><br>
<input type="submit" value="送出" />
</form>


</table>
</body>
</html>