<?php
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校長</title>
</head>

<body>

<p>校長待審核申請表</p>
<hr />
<!-- 顯示學生申請表 -->
<form>
審核結果：<br>
<input type="checkbox" value="ture" name="result">決行<br>
<input type="checkbox" value="false" name="result">否決<br>
<input type="submit" value="送出" />
</form>


</table>
</body>
</html>