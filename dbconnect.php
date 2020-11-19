<?php
$host = 'localhost';
$user = 'root';
$pass = '';
<<<<<<< HEAD
$db = '1091se';
=======
$db = '1901se';
>>>>>>> a7db5ad0f2a1a3b72ff107af2b9028748baa1812
$conn = mysqli_connect($host, $user, $pass, $db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
?>