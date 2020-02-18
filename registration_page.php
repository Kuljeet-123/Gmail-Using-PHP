<?php
include 'resource.php';
session_start();
//for form data
$UserId=$_REQUEST['UserId'];
$pwd=$_REQUEST['pwd'];
$Fname=$_REQUEST['FName'];
$Date=$_REQUEST['Date'];
$Month=$_REQUEST['Month'];
$Year=$_REQUEST['Year'];
$ConNum=$_REQUEST['ConNum'];
$add=$_REQUEST['Address'];
$OrigCap=$_REQUEST['OrigCap'];
$UipCap=$_REQUEST['UipCap'];

//business logic
if($_REQUEST['submit'])
{
	
		if($UserId=="" or $pwd=="" or $Fname=="" or $Date=="" or
			$Month=="" or $Year==""  or $ConNum=="" or $add=="" or
				$UipCap=="")
			
		{
			$errorMsg="Fill all req.. fields!";
		}	

		else
		{
				if($OrigCap!=$UipCap)
				{
				$errorMsg="You have entered wrong captcha";
				}
			
				else
				{
					if(file_exists("userProfile/$UserId"))
					{
						//check User Id if already taken by other
						$errorMsg="Id not avl...";
					}
					else
					{
						//create new profile 
						mkdir("userProfile/$UserId");
						mkdir("userProfile/$UserId/inbox");
						mkdir("userProfile/$UserId/sent");
						mkdir("userProfile/$UserId/draft");
						mkdir("userProfile/$UserId/trash");
						mkdir("userProfile/$UserId/labels");
						mkdir("userProfile/$UserId/chatRoom");
		
						$details=$Fname."\t".$Date."-".$Month."-".$Year."\t".$ConNum."\t".$add;	
						file_put_contents("userProfile/$UserId/$pwd",$details);
						$_SESSION['UserId'] = $UserId;
						$_SESSION['Password'] =$pwd;
						header("location: welcomeMsg.php");
					}
				
				}	
		
		}
		

}

?>
<html>
<head>
<meta charset="utf-8">
<title>Registration Page</title>
<link href="registration_page.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper"><!-- page starts-->
	<div id="header"><!--header starts-->
  	<img src="logo.png" alt="" id="logo"/> 
	<a href="index.php" id="SignInLink">Sign In</a>
	</div><!--header ends-->
<p id="text">Create your Google Account</p>

	<form id="RegistrationForm" action="#" method="post">
    <table id="RegistrationTable">
  <tr>
    <td id="error"><?php echo $errorMsg; ?></td>
  </tr>
  <tr>
    <td><input type="text" value placeholder="Create User Id" 
    name="UserId" id="UId"></td>
  </tr>
  <tr>
    <td><input type="password" value placeholder="Create password" 
    name="pwd" id="UId"></td>
  </tr>
  <tr>
    <td><input type="text" value placeholder="Full Name" 
    name="FName" id="UId"></td>
  </tr>
  <tr>
    <td>
    <select id="date" name="Date">
    <option>Date</option>
    <?php
	for($i=0;$i<$Cdate;$i++)
	{
	echo "<option>".$date[$i]."</option>";	
	}
	?>
    </select>
    
    <select id="month" name="Month">
    <option>Month</option>
    <?php
	for($i=0;$i<$Cmonth;$i++)
	{
	echo "<option>".$month[$i]."</option>";	
	}
	?>
    </select>
    
    <select id="year" name="Year">
    <option>Year</option>
    <?php
	for($i=0;$i<$Cyear;$i++)
	{
	echo "<option>".$year[$i]."</option>";	
	}
	?>
    </select>
    </td>
  </tr>
  
  <tr>
    <td><input type="text" value placeholder="Contact Number" 
    name="ConNum" id="UId"></td>
  </tr>
  <tr>
    <td><input type="text" value placeholder="Address" 
    name="Address" id="UId"></td>
  </tr>
  <tr>
    <td><input type="text" value="<?php echo $captcha; ?>" name="OrigCap"
     id="UId1" readonly ></td>
  </tr>
  <tr>
    <td><input type="text" value placeholder="Enter captcha code"
    name="UipCap" id="UId1"></td>
  </tr>
  <tr>
  <td>
  <input type="submit" value="Create Account" name="submit" id="UId2">
  </td>
  </tr>
  
  
</table>

	</form>

</div><!--Page ends-->
</body>
</html>