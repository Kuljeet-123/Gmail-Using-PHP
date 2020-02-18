<?php
session_start();
if(isset($_SESSION['UserId']))
	unset($_SESSION['UserId']);
header("location:index.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>logout</title>
</head>

<body>
</body>
</html>