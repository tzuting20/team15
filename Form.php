<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>貧困學生補助經費申請表</title>
</head>
<body>
<h1>貧困學生補助經費申請表</h1>
<form method="post" action="Form.php">

      task title: <input name="title" type="text" id="title" /> <br>

      task description: <input name="msg" type="text" id="msg" /> <br>
	  
	  status: <select  name="status" type="select" id="urgent" /> 
					<option value='低收入戶'>低收入戶</option>
					<option value='中低收入戶'>中低收入戶</option>
					<option value='家庭突發因素'>家庭突發因素</option>
					</select>
	  <br>

      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>
