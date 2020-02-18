<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="welcomeMsg.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper"><!-- page starts-->
	<div id="header"><!--header starts-->
    
    Welcome: <?php echo $_SESSION['UserId']; ?>
	 Password:<?php echo $_SESSION['Password'];?>
  	<img src="logo.png" alt="" id="logo"/>
	</div><!--header ends-->
    
    <div id="confirmation_box"><!--confirmartion box starts-->
    Your account has been sucessfully created.<br><br>
    Your Log in details are:<br>
    	User Id: <?php echo $_SESSION['UserId']; ?><br>
        Password:<?php echo $_SESSION['Password'];?><br><br><br><br><br><br>
        
        <p align="center">
	<a href="logout.php">Click here to Cont...</a></p>
    
    </div><!--confirmation box ends-->
</div><!--page ends-->
</body>
</html>